<?php

namespace App\Mail;

use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VerifySubscriberEmail extends Mailable
{
    use Queueable, SerializesModels;

    public Subscriber $subscriber;

    public string $verificationUrl;

    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;

        $this->verificationUrl = route('subscribe.verify', ['hash' => $subscriber->hash]);
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('Confirm email address'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.subscribers.verify',
        );
    }
}
