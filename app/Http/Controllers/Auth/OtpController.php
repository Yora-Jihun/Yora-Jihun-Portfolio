<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\OtpService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class OtpController extends Controller
{
    public function __construct(
        private readonly OtpService $otpService,
    ) {}

    public function showVerifyForm(Request $request)
    {
        $email = $request->query('email');

        if (!$email) {
            return redirect()->route('login');
        }

        $rateLimitExpiry = $request->session()->get('rate_limit_expiry');
        $rateLimitTotalMs = $request->session()->get('rate_limit_total_ms');

        $request->session()->forget('verify_attempts');

        return view('auth.otp-verify', [
            'email' => $email,
            'otpExpiry' => $request->session()->get('otp_expiry'),
            'otpTotalMs' => $request->session()->get('otp_total_ms', config('auth.otp_expiry', 5) * 60 * 1000),
            'rateLimitExpiry' => $rateLimitExpiry ?? null,
            'rateLimitTotalMs' => $rateLimitTotalMs ?? null,
            'resendCooldownUntil' => $request->session()->get('resend_cooldown_until'),
            'verifyAttempts' => $request->session()->get('verify_attempts', 0),
            'maxVerifyAttempts' => config('auth.max_verify_attempts', 5),
            'resendCooldown' => config('auth.otp_resend_cooldown', 60),
        ]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|string|size:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !$user->is_admin) {
            return back()->withErrors([
                'otp' => 'Invalid OTP.',
            ]);
        }

        $key = 'otp-verify:' . $request->email;
        $maxAttempts = config('auth.max_verify_attempts', 5);
        $rateLimiterDecay = config('auth.otp_rate_limiter_decay', 300);

        if (RateLimiter::tooManyAttempts($key, $maxAttempts)) {
            $availableIn = RateLimiter::availableIn($key);
            $request->session()->put('rate_limit_expiry', now()->addSeconds($availableIn)->timestamp);
            $request->session()->put('rate_limit_total_ms', $availableIn * 1000);

            $this->otpService->invalidateOtp($user);
            $request->session()->put('rate_limit_error', "Too many verification attempts. Please try again in {$availableIn} seconds.");

            return redirect()->route('admin.otp.verify', ['email' => $request->email]);
        }

        RateLimiter::hit($key, $rateLimiterDecay);

        if ($this->otpService->verifyOtp($user, $request->otp)) {
            RateLimiter::clear($key);
            $request->session()->forget('verify_attempts');
            $request->session()->forget('verify_failed');
            $request->session()->forget('rate_limit_error');
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->intended('/admin/posts');
        }

        $attempts = $request->session()->get('verify_attempts', 0) + 1;
        $request->session()->put('verify_attempts', $attempts);

        if ($attempts >= $maxAttempts) {
            $this->otpService->invalidateOtp($user);
            $request->session()->put('verify_failed', 'Verification failed. Too many attempts. Please request a new code.');

            return redirect()->route('admin.otp.verify', ['email' => $request->email]);
        }

        return back()->withErrors([
            'otp' => 'The OTP you provided is invalid or has expired.',
        ]);
    }

    public function resendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !$user->is_admin) {
            return response()->json([
                'success' => false,
                'message' => 'If that email is registered, an OTP has been sent.',
            ], 404);
        }

        // Check server-side cooldown
        $resendCooldownUntil = $request->session()->get('resend_cooldown_until');
        $resendCooldown = config('auth.otp_resend_cooldown', 60);

        if ($resendCooldownUntil && $resendCooldownUntil > now()->timestamp) {
            $remainingSeconds = $resendCooldownUntil - now()->timestamp;

            return response()->json([
                'success' => false,
                'message' => 'Please wait before resending OTP',
                'remaining_seconds' => $remainingSeconds,
            ], 429);
        }

        try {
            $otp = $this->otpService->generateOtp($user);
            $this->otpService->sendOtp($user);

            $request->session()->put('resend_cooldown_until', now()->addSeconds($resendCooldown)->timestamp);
            $request->session()->forget('verify_attempts');
            $request->session()->forget('verify_failed');
            $request->session()->forget('rate_limit_error');

            return response()->json([
                'success' => true,
                'message' => 'OTP resent successfully',
                'cooldown_until' => now()->addSeconds($resendCooldown)->timestamp,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to send OTP. Please try again later.',
            ], 500);
        }
    }
}