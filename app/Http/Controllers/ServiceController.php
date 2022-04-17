<?php

namespace App\Http\Controllers;

use App\Helper\MyHelper;
use App\Http\Requests\StoreService;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    private $context = [
        'category_name' => 'services',
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
    ];

    public function service()
    {
        $services = Cache::remember('services', now()->addMinutes(30), function (){
            return Service::latest()->get();
        });
        $context = [
            'page_name' => 'service',
            'services' => $services
        ];
//        return view('core.services.service', $context);
        return Service::all();
    }

    public function all_services()
    {
        $this->context['page_name'] = 'all_services';
        $this->context['services'] = Service::all();
        return view('admin.pages.services.all_services', $this->context);
    }

    public function add_service()
    {
        $this->context['page_name'] = 'add_service';
        return view('admin.pages.services.add_service', $this->context);
    }

    public function modify_service($id)
    {
        $this->context['page_name'] = 'modify_service';
        $this->context['service'] = Service::findOrFail($id);
        return view('admin.pages.services.modify_service', $this->context);
    }


    public function store_service(StoreService $request): RedirectResponse
    {
        $validatedData = $request->validated();
        $validatedData['slug'] = Str::slug($validatedData['title']);
        $service = Service::create($validatedData);
        MyHelper::storeImage($request, $service);
        $request->session()->flash('success', 'Service has been Created');
        return redirect()->route('services.all');
    }

    public function update_service(StoreService $request, $id): RedirectResponse
    {
        $validatedData = $request->validated();
        $validatedData['slug'] = Str::slug($validatedData['title']);
        $service = Service::findOrFail($id);
        $service->fill($validatedData);
        MyHelper::updateImage($request, $service);
        $request->session()->flash('success', 'Service has been Updated');
        return redirect()->route('services.all');
    }

    public function destroy_service(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        $request->session()->flash('success', 'Service was Deleted!');
        return redirect()->route('services.all');
    }

    public function service_details($slug)
    {


        $service
            = Cache::remember("service-{$slug}", now()->addMinutes(30), function () use($slug){
            return Service::where('slug', $slug)->with('tags')->first();
        });
        if(!$service){
            return redirect()->route('services.index');
        }
        $context = [
            'page_name' => 'service_details',
            'service' => $service,
            'counter' => $counter->increment("service-{$slug}", ['service'])
        ];
        return view('core.services.service-details', $context);
    }

    public function view_service($id)
    {
//        $service = Service::with(['comment' => function($query){
//            return $query->latest();
//        }])->findOrFail($id);
//        return view('admin.pages.services.view_service');
//        $mostCommented = Service::mostCommented()->take(5)->get;
    }
}
