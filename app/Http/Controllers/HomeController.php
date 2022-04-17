<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;
use Newsletter;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index()
    {
//        dd(Project::all());
        $context = [
            'page_name' => 'home',
            'services' => Service::all()->take(4),
            'about' => About::all()->first(),
            'projects' => Project::all(),
            'profiles' => Profile::all()->take(4),
            'sliders' => Slider::all(),
            'video' => Video::all()->first()
        ];
        return view('core.home.index', $context);
    }

    public function store_newsletter(Request $request)
    {
        $validatedData = $request->validate([
            'newsletter_email' => 'required|email'
        ]);

        if ( ! Newsletter::isSubscribed($validatedData['newsletter_email']) )
        {
            Newsletter::subscribePending($validatedData['newsletter_email']);
            return redirect(url()->previous().'#newsletter')->with('success_subscribing', 'Thanks For Subscribe');
        }

        return redirect(url()->previous().'#newsletter')->with('failure_subscribing', 'Sorry! You have already subscribed');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('admin.dashboard2');
    }
}
