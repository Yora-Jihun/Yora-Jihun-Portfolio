<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\OtpService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class LoginController extends Controller
{
    public function __construct(
        private readonly OtpService $otpService,
    ) {}

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! $user->is_admin) {
            return back()->withErrors([
                'email' => 'No admin account found with this email address.',
            ]);
        }

        $key = 'otp-send:'.$request->email;
        $maxSendAttempts = config('auth.max_verify_attempts', 5);

        if (RateLimiter::tooManyAttempts($key, $maxSendAttempts)) {
            $seconds = RateLimiter::availableIn($key);
            $request->session()->put('rate_limit_expiry', now()->addSeconds($seconds)->timestamp);
            $request->session()->put('rate_limit_total_ms', $seconds * 1000);

            return back()->withErrors([
                'email' => "Too many OTP requests. Please try again in {$seconds} seconds.",
            ]);
        }

        $resendKey = 'otp-resend:'.$request->email;

        if (RateLimiter::tooManyAttempts($resendKey, 1)) {
            $seconds = RateLimiter::availableIn($resendKey);

            return back()->withErrors([
                'email' => "Please wait {$seconds} seconds before requesting another OTP.",
            ]);
        }

        RateLimiter::hit($key, config('auth.otp_rate_limiter_decay', 300));
        RateLimiter::hit($resendKey, config('auth.otp_resend_cooldown', 60));

        $this->otpService->invalidateOtp($user);
        $otp = $this->otpService->sendOtp($user);

        RateLimiter::clear('otp-verify:'.$request->email);

        $request->session()->forget('verify_attempts');
        $request->session()->forget('verify_failed');
        $request->session()->forget('rate_limit_error');
        $request->session()->forget('rate_limit_expiry');
        $request->session()->forget('rate_limit_total_ms');

        $request->session()->put('resend_cooldown_until', now()->addSeconds(config('auth.otp_resend_cooldown', 60))->timestamp);
        $request->session()->put('otp_expiry', $otp->expires_at->timestamp);
        $request->session()->put('otp_total_ms', config('auth.otp_expiry', 5) * 60 * 1000);

        return redirect()->route('admin.otp.verify', ['email' => $request->email])
            ->with('status', 'OTP sent to your email address.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
