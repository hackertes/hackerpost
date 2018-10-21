<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailReminderKedua extends Mailable
{
    use Queueable, SerializesModels;

    public $lessons;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($lessons)
    {
        $this->lessons = $lessons;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.reminder_kedua');
    }
}