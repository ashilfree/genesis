<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSend extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @param Contact $contact
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = "Contact was sent with {$this->contact->service} request";
        return $this
//            ->attach(
//                storage_path('app/public').'/images/nBZXviIWAnL8Vb7QBXRFMqCtWqQKwDVTaCIhFb0L.png',
//                [
//                    'as' => 'profile_picture.png',
//                    'mine' => 'image/png'
//                ]
//            )
//                ->attachFromStorage('images/nBZXviIWAnL8Vb7QBXRFMqCtWqQKwDVTaCIhFb0L.png', 'profile_picture.png')
//                ->attachFromStorageDisk('public', 'images/nBZXviIWAnL8Vb7QBXRFMqCtWqQKwDVTaCIhFb0L.png')
//                ->attachData(Storage::get('images/nBZXviIWAnL8Vb7QBXRFMqCtWqQKwDVTaCIhFb0L.png'), 'profile_picture.png', [
//                    'mine' => 'image/png'
//                 ])
            ->from('admin@laravel.test', 'Admin')
            ->subject($subject)
            ->view('core.emails.contact');
    }
}
