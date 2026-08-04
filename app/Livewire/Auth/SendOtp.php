<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Services\OtpService;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Component;

class SendOtp extends Component
{
    public string $email = '';

    public function send()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $this->email)->first();

        if (! $user || ! $user->is_admin) {
            $this->addError('email', 'No admin account found with this email address.');

            return;
        }

        $key = 'otp-send:'.$this->email;
        $maxSendAttempts = config('auth.max_verify_attempts', 5);

        if (RateLimiter::tooManyAttempts($key, $maxSendAttempts)) {
            $seconds = RateLimiter::availableIn($key);
            session()->put('rate_limit_expiry', now()->addSeconds($seconds)->timestamp);
            session()->put('rate_limit_total_ms', $seconds * 1000);

            $this->addError('email', "Too many OTP requests. Please try again in {$seconds} seconds.");

            return;
        }

        // Enforce a hard 60-second cooldown server-side so a hacker cannot
        // spam the initial send to bypass the resend cooldown.
        $resendKey = 'otp-resend:'.$this->email;

        if (RateLimiter::tooManyAttempts($resendKey, 1)) {
            $seconds = RateLimiter::availableIn($resendKey);

            $this->addError('email', "Please wait {$seconds} seconds before requesting another OTP.");

            return;
        }

        RateLimiter::hit($key, config('auth.otp_rate_limiter_decay', 300));
        RateLimiter::hit($resendKey, config('auth.otp_resend_cooldown', 60));

        $otpService = app(OtpService::class);
        $otpService->invalidateOtp($user);
        $otp = $otpService->sendOtp($user);

        // Clear the verification rate limiter counter when a new OTP is sent
        RateLimiter::clear('otp-verify:'.$this->email);

        // Clear any stale verification session state from a previous attempt
        session()->forget([
            'verify_attempts',
            'verify_failed',
            'rate_limit_error',
            'rate_limit_expiry',
            'rate_limit_total_ms',
        ]);

        session()->put('resend_cooldown_until', now()->addSeconds(config('auth.otp_resend_cooldown', 60))->timestamp);
        session()->put('otp_expiry', $otp->expires_at->timestamp);
        session()->put('otp_total_ms', config('auth.otp_expiry', 5) * 60 * 1000);

        return redirect()->route('admin.otp.verify', ['email' => $this->email])
            ->with('status', 'OTP sent to your email address.');
    }

    public function render()
    {
        return view('livewire.auth.send-otp');
    }
}