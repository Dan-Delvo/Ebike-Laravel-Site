<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendStart extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // optional if you want to pass details

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Your eBike is now charging!')
                    ->markdown('emails.ebike_start');
    }
}
