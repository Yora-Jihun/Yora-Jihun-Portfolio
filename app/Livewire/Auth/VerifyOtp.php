<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Services\OtpService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Component;

class VerifyOtp extends Component
{
    public string $email = '';

    public string $otp = '';

    /** @var array<int, string> */
    public array $otpDigits = ['', '', '', '', '', ''];

    public int $verifyAttempts = 0;

    public int $maxVerifyAttempts = 5;

    public bool $resendCooldownActive = false;

    public int $resendCooldownTime = 60;

    public int $otpExpirySeconds = 300;

    public int $otpExpiryTimestamp = 0;

    public int $otpTotalMs = 300000;

    public int $resendCooldownUntilTimestamp = 0;

    public ?string $successMessage = null;

    public ?string $errorMessage = null;

    public function mount(?string $email = null)
    {
        if (! $email) {
            return redirect()->route('login');
        }

        $this->email = $email;
        $this->maxVerifyAttempts = (int) config('auth.max_verify_attempts', 5);
        $this->verifyAttempts = (int) session()->get('verify_attempts', 0);
        $this->resendCooldownTime = (int) config('auth.otp_resend_cooldown', 60);

        $this->otpExpiryTimestamp = (int) session()->get('otp_expiry', 0);
        $this->otpTotalMs = (int) session()->get('otp_total_ms', config('auth.otp_expiry', 5) * 60 * 1000);

        if ($this->otpExpiryTimestamp > 0) {
            $this->otpExpirySeconds = max(0, $this->otpExpiryTimestamp - (int) now()->timestamp);
        } else {
            $this->otpExpirySeconds = (int) config('auth.otp_expiry', 5) * 60;
        }

        $this->resendCooldownUntilTimestamp = (int) session()->get('resend_cooldown_until', 0);
        if ($this->resendCooldownUntilTimestamp > now()->timestamp) {
            $this->resendCooldownActive = true;
            $this->resendCooldownTime = max(1, $this->resendCooldownUntilTimestamp - (int) now()->timestamp);
        }

        $this->verifyAttempts = (int) session()->get('verify_attempts', 0);
    }

    public function verify()
    {
        $this->validate([
            'otp' => 'required|string|size:6',
        ]);

        $otpService = app(OtpService::class);

        $user = User::where('email', $this->email)->first();

        if (! $user || ! $user->is_admin) {
            $this->addError('otp', 'Invalid OTP.');

            return;
        }

        $key = 'otp-verify:'.$this->email;
        $rateLimiterDecay = (int) config('auth.otp_rate_limiter_decay', 300);

        if (RateLimiter::tooManyAttempts($key, $this->maxVerifyAttempts)) {
            $otpService->invalidateOtp($user);
            session()->put('rate_limit_error', 'Too many attempts. Please request a new code again.');
            $this->errorMessage = 'Too many attempts. Please request a new code again.';

            return;
        }

        if ($otpService->verifyOtp($user, $this->otp)) {
            RateLimiter::clear($key);
            session()->forget(['verify_attempts', 'verify_failed', 'rate_limit_error']);
            Auth::login($user);
            session()->regenerate();

            return redirect()->intended('/admin/posts');
        }

        RateLimiter::hit($key, $rateLimiterDecay);

        $this->verifyAttempts++;
        session()->put('verify_attempts', $this->verifyAttempts);

        if ($this->verifyAttempts >= $this->maxVerifyAttempts) {
            $otpService->invalidateOtp($user);
            session()->put('verify_failed', 'Too many attempts. Please request a new code again.');
            $this->errorMessage = 'Too many attempts. Please request a new code again.';

            return;
        }

        $this->addError('otp', 'The OTP you provided is invalid or has expired.');
    }

    public function resend()
    {
        if ($this->resendCooldownActive) {
            return;
        }

        $otpService = app(OtpService::class);

        $user = User::where('email', $this->email)->first();

        if (! $user || ! $user->is_admin) {
            $this->errorMessage = 'Failed to resend OTP. Please try again later.';

            return;
        }

        $resendKey = 'otp-resend:'.$this->email;
        $resendCooldown = (int) config('auth.otp_resend_cooldown', 60);

        if (RateLimiter::tooManyAttempts($resendKey, 1)) {
            $remainingSeconds = max(1, RateLimiter::availableIn($resendKey));
            $this->resendCooldownActive = true;
            $this->resendCooldownTime = $remainingSeconds;
            $this->resendCooldownUntilTimestamp = now()->addSeconds($remainingSeconds)->timestamp;
            session()->put('resend_cooldown_until', $this->resendCooldownUntilTimestamp);

            return;
        }

        RateLimiter::hit($resendKey, $resendCooldown);
        $otp = $otpService->sendOtp($user);

        session()->put('resend_cooldown_until', now()->addSeconds($resendCooldown)->timestamp);
        session()->put('otp_expiry', $otp->expires_at->timestamp);
        session()->put('otp_total_ms', config('auth.otp_expiry', 5) * 60 * 1000);
        session()->forget(['verify_attempts', 'verify_failed', 'rate_limit_error']);

        RateLimiter::clear('otp-verify:'.$this->email);

        $this->verifyAttempts = 0;
        $this->otp = '';
        $this->otpDigits = ['', '', '', '', '', ''];
        $this->resendCooldownActive = true;
        $this->resendCooldownTime = $resendCooldown;
        $this->otpExpirySeconds = (int) config('auth.otp_expiry', 5) * 60;
        $this->otpExpiryTimestamp = (int) $otp->expires_at->timestamp;
        $this->otpTotalMs = (int) config('auth.otp_expiry', 5) * 60 * 1000;
        $this->resendCooldownUntilTimestamp = now()->addSeconds($resendCooldown)->timestamp;
        $this->successMessage = 'OTP resent successfully. Please check your email.';
        $this->errorMessage = null;

        $this->dispatch('otp-resend-success',
            otpExpiryEnd: $this->otpExpiryTimestamp * 1000,
            otpTotalMs: $this->otpTotalMs,
            resendCooldownEnd: $this->resendCooldownUntilTimestamp * 1000,
        );
        $this->dispatch('reset-otp-inputs');
    }

    public function clearResendCooldown()
    {
        $this->resendCooldownActive = false;
        session()->forget('resend_cooldown_until');
    }

    public function render()
    {
        return view('livewire.auth.verify-otp');
    }
}