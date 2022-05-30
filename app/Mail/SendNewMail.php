<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $email_author;
    protected $author_address;
    protected $email_title;
    protected $email_content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_author, $author_address, $email_title, $email_content)
    {
        $this->email_author = $email_author;
        $this->author_address = $author_address;
        $this->email_title = $email_title;
        $this->email_content = $email_content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.body', [
            'author' => $this->email_author,
            'author_address' => $this->author_address,
            'title' => $this->email_title,
            'content' => $this->email_content,
        ]);
    }
}
