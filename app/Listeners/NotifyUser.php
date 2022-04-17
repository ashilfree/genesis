<?php

namespace App\Listeners;

use App\Events\ContactSend;
use App\Jobs\NotifyUsersContactWasPosted;
use App\Mail\ContactSendMarkdown;
use Illuminate\Support\Facades\Mail;

class NotifyUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ContactSend  $event
     * @return void
     */
    public function handle(ContactSend $event)
    {
        Mail::to($event->contact->email)->queue(
            new ContactSendMarkdown($event->contact)
        );

        NotifyUsersContactWasPosted::dispatch($event->contact);
    }
}
