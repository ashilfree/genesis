<?php

namespace App\Mail;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WhatOtherUserContactUs extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * @var Contact
     */
    private $contact;
    /**
     * @var User
     */
    private $user;

    /**
     * Create a new message instance.
     *
     * @param Contact $contact
     * @param User $user
     */
    public function __construct(Contact $contact, User $user)
    {
        $this->contact = $contact;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('admin@laravel.test', 'Admin')
            ->markdown('core.emails.what-contact-markdown')->with([
            'contact' => $this->contact,
            'user' => $this->user
        ]);
    }
}
