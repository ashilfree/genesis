<?php

namespace App\Http\Controllers;

use App\Helper\MyHelper;
use App\Http\Requests\StoreSlider;
use App\Models\Slider;
use Illuminate\Http\RedirectResponse;

class SliderController extends Controller
{
    private $context = [
        'category_name' => 'sliders',
        'has_scrollspy' => 0,
        'scrollspy_offset' => ''
    ];
    public function all_sliders()
    {
        $this->context['page_name'] = 'all_sliders';
        $this->context['sliders'] = Slider::all();
        return view('admin.pages.sliders.all_sliders', $this->context);
    }

    public function add_slider()
    {
        $this->context['page_name'] = 'add_slider';
        return view('admin.pages.sliders.add_slider', $this->context);
    }

    public function modify_slider($id)
    {
        $this->context['page_name'] = 'modify_slider';
        $this->context['slider'] = Slider::findOrFail($id);
        return view('admin.pages.sliders.modify_slider', $this->context);
    }

    public function store_slider(StoreSlider $request): RedirectResponse
    {
        $validatedData = $request->validated();
        $slider = Slider::create($validatedData);
        MyHelper::storeImage($request, $slider);
        $request->session()->flash('success', 'Slider has been Created');
        return redirect()->route('sliders.all');
    }

    public function update_slider(StoreSlider $request): RedirectResponse
    {
        $validatedData = $request->validated();
        $slider = Slider::findOrFail(1);
        $slider->fill($validatedData);
        MyHelper::updateImage($request, $slider);
        $request->session()->flash('success', 'Slider has been Updated');
        return redirect()->route('sliders.all');
    }
}
