<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContact;
use App\Jobs\NotifyUsersContactWasPosted;
use App\Events\ContactSend;
use App\Mail\ContactSendMarkdown;
use App\Models\Contact;
use App\Models\Profile;
use App\Models\Project;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    public function contact()
    {
        $context = [
            'page_name' => 'contact'
        ];
        return view('core.company.contact-us', $context);
    }

    public function store_contact(StoreContact $request)
    {
        $validatedData = $request->validated();
        $contact = Contact::create($validatedData);
//        Should implements ShouldQueue in ContactSendMarkdown
//        Mail::to($contact->email)->send(
//            new ContactSendMarkdown($contact)
//        );


//        Mail::to($contact->email)->queue(
//            new ContactSendMarkdown($contact)
//        );
//
//        NotifyUsersContactWasPosted::dispatch($contact);


        event(new ContactSend($contact));


//        $when = now()->addMinutes(1);
//
//        Mail::to($contact->email)->later(
//            $when,
//            new ContactSendMarkdown($contact)
//        );

        $request->session()->flash('success', 'Contact has been send it!');
        if ($request->get('page') == "home") {
            return redirect('/#contact');
        }else{
            return redirect()->back();
        }

    }

    public function portfolio()
    {
        $context = [
            'page_name' => 'portfolio',
            'projects' => Project::all()
        ];
        return view('core.company.portfolio', $context);
    }

    public function team_member()
    {
        $context = [
            'page_name' => 'team_member',
            'profiles' => Profile::all()
        ];
        return view('core.company.team-member', $context);
    }
}
