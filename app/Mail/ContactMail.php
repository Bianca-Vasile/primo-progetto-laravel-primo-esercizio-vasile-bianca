<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $messaggio;

    /**
     * Create a new message instance.
     */
    public function __construct($email, $messaggio)
    {
        $this->email = $email;
        $this->messaggio = $messaggio;
    }

    /**
     * Build the message.
     */
    public function envelope()
    {
        return new \Illuminate\Mail\Mailables\Envelope(
            subject: 'Nuova richiesta di contatto'
        );
    }

    public function content()
    {
        return new \Illuminate\Mail\Mailables\Content(
            view: 'emails.contact',
        );
    }
}
