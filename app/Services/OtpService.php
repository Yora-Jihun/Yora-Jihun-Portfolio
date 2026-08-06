<?php

namespace App\Services;

use App\Enums\OtpStatus;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class OtpService
{
    public function generateOtp(): string
    {
        return str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);
    }

    public function createOtp(User $user): Otp
    {
        $otp = $this->generateOtp();

        return Otp::create([
            'user_id' => $user->id,
            'otp' => $otp,
            'expires_at' => now()->addMinutes(config('auth.otp_expiry', 5)),
            'status' => OtpStatus::Pending,
        ]);
    }

    public function sendOtp(User $user): Otp
    {
        $otp = $this->createOtp($user);

        Mail::send('emails.otp', [
            'otp' => $otp->otp,
            'expiryMinutes' => config('auth.otp_expiry', 5),
            'siteUrl' => url('/'),
        ], function ($message) use ($user) {
            $message->to($user->email)
                ->subject('Your Admin Login OTP');
        });

        return $otp;
    }

    public function verifyOtp(User $user, string $otp): bool
    {
        $record = Otp::where('user_id', $user->id)
            ->where('otp', $otp)
            ->where('status', OtpStatus::Pending)
            ->where('expires_at', '>', now())
            ->first();

        if (! $record) {
            return false;
        }

        $record->update([
            'status' => OtpStatus::Verified,
            'used_at' => now(),
        ]);

        return true;
    }

    public function invalidateOtp(User $user): void
    {
        Otp::where('user_id', $user->id)
            ->where('status', OtpStatus::Pending)
            ->update([
                'status' => OtpStatus::Expired,
            ]);
    }
}
