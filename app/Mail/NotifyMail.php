<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\SocialUser;

class NotifyMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $sub;
    public $test;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$sub)
    {
        $this->user = $user;
        $this->sub = $sub;
        $this->test = "test";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Customer Update')->view('notifymail');
    }
}
