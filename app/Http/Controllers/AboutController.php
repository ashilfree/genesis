<?php

namespace App\Http\Controllers;

use App\Helper\MyHelper;
use App\Http\Requests\StoreAbout;
use App\Models\About;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    private  $context = [
        'category_name' => 'abouts',
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
    ];

    public function index()
    {
        $context = [
            'page_name' => 'about',
            'about' => About::all()->first(),
            'profiles' => Profile::all()
        ];
        return view('core.company.about', $context);
    }

    public function all_abouts()
    {
        $this->context['page_name'] = 'all_abouts';
        $this->context['about'] = About::all()->first();
        return view('admin.pages.abouts.all_abouts', $this->context);
    }

    public function modify_about()
    {
        $this->context['page_name'] = 'modify_about';
        $this->context['about'] = About::findOrFail(1);
        return view('admin.pages.abouts.modify_about', $this->context);
    }

    public function update_about(StoreAbout $request): RedirectResponse
    {
        $validatedData = $request->validated();
        $validatedData['slug'] = Str::slug($validatedData['title']);
        $about = About::findOrFail(1);
        $tags = explode(",", $request->tags);
        $about->fill($validatedData);
        MyHelper::updateImage($request, $about);
        $about->retag($tags);
        $request->session()->flash('success', 'About has been Updated');
        return redirect()->route('abouts.all');
    }

}
