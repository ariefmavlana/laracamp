<?php

namespace App\Mail\Checkout;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AfterCheckout extends Mailable
{
    use Queueable, SerializesModels;

    private $checkout;

    /**
     * Create a new message instance.
     */
    public function __construct($checkout)
    {
        $this->checkout = $checkout;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject("Register Camp: {$this->checkout->Camp->title}")->markdown('mail.checkout.afterCheckout', [
            'checkout' => $this->checkout
        ]);
    }
}
