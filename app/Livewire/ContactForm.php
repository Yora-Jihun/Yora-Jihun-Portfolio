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

    public bool $isSending = false;

    public ?string $status = null;

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        $ip = request()->ip();
        $key = 'contact_form_' . $ip;

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

        $this->status = 'Message sent successfully. I will get back to you soon.';
        $this->reset(['name', 'email', 'message']);
        $this->isSending = false;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
