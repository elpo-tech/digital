<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RecepMail extends Mailable
{
    public $payment;

    public function __construct($payment)
    {
        $this->payment = $payment;
    }

    public function build()
    {
        return $this->subject('Digital Care Week Payment Receipt')
            ->view('emails.recep');
    }
}
