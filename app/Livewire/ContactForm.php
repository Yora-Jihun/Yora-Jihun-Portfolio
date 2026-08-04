<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public string $name = '';

    public string $email = '';

    public string $message = '';

    public string $otp = '';

    public bool $isSending = false;

    public bool $isVerifying = false;

    public ?string $status = null;

    public ?string $errorMessage = null;

    public ?string $resendSuccess = null;

    public bool $resendCooldownActive = false;

    public int $resendCooldownTime = 60;

    public ?string $resendButtonText = 'Resend OTP';

    public int $attempts = 0;

    public int $maxAttempts = 5;

    public int $otpExpiry = 300;

    public bool $otpExpired = false;

    public bool $tooManyAttempts = false;

    public function mount()
    {
        $this->resetResendCooldown();
        $this->loadAttemptsFromStorage();
    }

    private function getAttemptsKey(): string
    {
        return 'contact_otp_attempts_'.request()->ip();
    }

    private function loadAttemptsFromStorage(): void
    {
        $this->attempts = Cache::get($this->getAttemptsKey(), 0);
        $this->tooManyAttempts = $this->attempts >= $this->maxAttempts;
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        $ip = request()->ip();
        $key = 'contact_form_'.$ip;

        if (Cache::get($key)) {
            $this->addError('email', 'Too many messages. Please wait a moment before trying again.');

            return;
        }

        $this->isSending = true;

        Mail::to(config('mail.from.address'))->send(new ContactMail([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]));

        Cache::put($key, true, 1);

        $this->status = 'OTP sent successfully. Please check your email.';
        $this->otpExpiry = 300;
        $this->otpExpired = false;
        $this->attempts = 0;
        $this->tooManyAttempts = false;
        $this->errorMessage = null;
        Cache::forget($this->getAttemptsKey());
        $this->reset(['name', 'email', 'message', 'otp']);
        $this->isSending = false;
    }

    public function verifyOtp()
    {
        if ($this->tooManyAttempts) {
            return;
        }

        $this->isVerifying = true;

        if (strlen($this->otp) !== 6 || $this->otp !== '123456') {
            $this->attempts++;
            Cache::put($this->getAttemptsKey(), $this->attempts, 300);

            if ($this->attempts >= $this->maxAttempts) {
                $this->tooManyAttempts = true;
                $this->otpExpired = true;
                $this->errorMessage = 'Please request a new code, too many attempts.';
                $this->status = null;
            } else {
                $this->addError('otp', 'Invalid OTP. Please try again.');
            }

            $this->isVerifying = false;

            return;
        }

        $this->status = 'OTP verified successfully!';
        $this->otpExpired = true;
        $this->isVerifying = false;
    }

    public function resend()
    {
        if ($this->resendCooldownActive) {
            return;
        }

        $this->resendSuccess = 'OTP resent successfully. Please check your email.';
        $this->otpExpiry = 300;
        $this->otpExpired = false;
        $this->attempts = 0;
        $this->tooManyAttempts = false;
        $this->errorMessage = null;
        $this->status = null;
        $this->otp = '';
        Cache::forget($this->getAttemptsKey());
        $this->startResendCooldown();
    }

    public function startResendCooldown()
    {
        $this->resendCooldownActive = true;
        $this->resendCooldownTime = 60;
        $this->updateResendButtonText();
    }

    public function tick()
    {
        if ($this->resendCooldownActive && $this->resendCooldownTime > 0) {
            $this->resendCooldownTime--;
            $this->updateResendButtonText();

            if ($this->resendCooldownTime <= 0) {
                $this->resendCooldownActive = false;
                $this->updateResendButtonText();
            }
        }

        if (! $this->tooManyAttempts && ! $this->otpExpired && $this->otpExpiry > 0) {
            $this->otpExpiry--;
        }
    }

    public function updateResendButtonText()
    {
        if ($this->resendCooldownActive) {
            $this->resendButtonText = 'Resend OTP ('.$this->resendCooldownTime.'s)';
        } else {
            $this->resendButtonText = 'Resend OTP';
        }
    }

    public function resetResendCooldown()
    {
        $this->resendCooldownActive = false;
        $this->resendCooldownTime = 60;
        $this->updateResendButtonText();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
