<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class DefaultMail extends Mailable
{

    public $subject;
    public $emailFrom;
    public $content;

    public function __construct($emailFrom, $subject, $content)
    {
        $this->emailFrom = $emailFrom;
        $this->subject = $subject;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->emailFrom)->subject($this->subject)->view('send-email');
    }
}
