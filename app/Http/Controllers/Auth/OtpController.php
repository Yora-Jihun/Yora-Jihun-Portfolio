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
            $this->otpService->invalidateOtp($user);
            $request->session()->put('rate_limit_error', 'Too many attempts. Please request a new code again.');

            return redirect()->route('admin.otp.verify', ['email' => $request->email]);
        }

        if ($this->otpService->verifyOtp($user, $request->otp)) {
            RateLimiter::clear($key);
            $request->session()->forget('verify_attempts');
            $request->session()->forget('verify_failed');
            $request->session()->forget('rate_limit_error');
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->intended('/admin/posts');
        }

        RateLimiter::hit($key, $rateLimiterDecay);

        $attempts = $request->session()->get('verify_attempts', 0) + 1;
        $request->session()->put('verify_attempts', $attempts);

        if ($attempts >= $maxAttempts) {
            $this->otpService->invalidateOtp($user);
            $request->session()->put('verify_failed', 'Too many attempts. Please request a new code again.');

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

        $resendCooldownUntil = $request->session()->get('resend_cooldown_until');
        $resendCooldown = config('auth.otp_resend_cooldown', 60);

        if ($resendCooldownUntil && $resendCooldownUntil > now()->timestamp) {
            $remainingSeconds = $resendCooldownUntil - now()->timestamp;

            return response()->json([
                'success' => false,
                'message' => 'Please wait before resending OTP',
                'remaining_seconds' => $remainingSeconds,
            ]);
        }

        $resendKey = 'otp-resend:' . $request->email;

        if (RateLimiter::tooManyAttempts($resendKey, 1)) {
            $remainingSeconds = RateLimiter::availableIn($resendKey);

            return response()->json([
                'success' => false,
                'message' => 'Please wait before resending OTP',
                'remaining_seconds' => $remainingSeconds,
            ]);
        }

        try {
            RateLimiter::hit($resendKey, $resendCooldown);
            $otp = $this->otpService->sendOtp($user);

            $request->session()->put('resend_cooldown_until', now()->addSeconds($resendCooldown)->timestamp);
            $request->session()->put('otp_expiry', $otp->expires_at->timestamp);
            $request->session()->put('otp_total_ms', config('auth.otp_expiry', 5) * 60 * 1000);
            $request->session()->forget('verify_attempts');
            $request->session()->forget('verify_failed');
            $request->session()->forget('rate_limit_error');
            $request->session()->forget('rate_limit_expiry');
            $request->session()->forget('rate_limit_total_ms');

            RateLimiter::clear('otp-verify:' . $request->email);

            $request->session()->flash('status', 'OTP resent successfully. Please check your email.');

            return response()->json([
                'success' => true,
                'message' => 'OTP resent successfully',
                'cooldown_until' => now()->addSeconds($resendCooldown)->timestamp,
                'otp_expiry' => $otp->expires_at->timestamp,
                'otp_total_ms' => config('auth.otp_expiry', 5) * 60 * 1000,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to send OTP. Please try again later.',
            ], 500);
        }
    }
}