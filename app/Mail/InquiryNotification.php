<?php

namespace App\Mail;

use App\Models\Inquiry;
use Illuminate\Mail\Mailable;

class InquiryNotification extends Mailable
{
    public function __construct(public Inquiry $inquiry) {}

    public function build(): static
    {
        return $this->subject("Website inquiry \u{2013} Cyberlog Limited")
            ->replyTo($this->inquiry->email, $this->inquiry->name)
            ->text('mail.inquiry');
    }
}
