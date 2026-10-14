<?php

namespace App\Mail;

use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PromotionEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Subscriber $user, public string $url, public array $products = []) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '🎯 Promocja',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.promotion',
        );
    }

    static public function products($url = null)
    {
        return [
            [
                'title' => 'Apple MacBook M1',
                'price' => '3499.00 PLN',
                'url' => $url ?? '#',
                'image' => 'https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/laptop/mac3.webp',
            ],
            [
                'title' => 'Apple MacBook M2',
                'price' => '4599.99 PLN',
                'url' => $url ?? '#',
                'image' => 'https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/laptop/mac3.webp',
            ],
            [
                'title' => 'Apple MacBook M3',
                'price' => '5299.00 PLN',
                'url' => $url ?? '#',
                'image' => 'https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/laptop/mac3.webp',
            ],
            [
                'title' => 'Apple MacBook M3',
                'price' => '7999.00 PLN',
                'url' => $url ?? '#',
                'image' => 'https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/laptop/mac3.webp',
            ],
            [
                'title' => 'Apple MacBook M3 Pro',
                'price' => '9699.99 PLN',
                'url' => $url ?? '#',
                'image' => 'https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/laptop/mac3.webp',
            ],
            [
                'title' => 'Apple MacBook M3 Max',
                'price' => '14299.00 PLN',
                'url' => $url ?? '#',
                'image' => 'https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/laptop/mac3.webp',
            ],
        ];
    }
}
