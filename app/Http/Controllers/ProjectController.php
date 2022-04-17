<?php

namespace App\Http\Controllers;

use App\Helper\MyHelper;
use App\Http\Requests\StoreProject;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProjectController extends Controller
{
    private $context = [
        'category_name' => 'projects',
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
    ];

    public function all_projects()
    {
        $this->context['page_name'] = 'all_projects';
        $this->context['projects'] = Project::all();
        return view('admin.pages.projects.all_projects', $this->context);
    }

    public function add_project()
    {
        $this->context['page_name'] = 'add_project';
        $this->context['users'] = User::all();
        return view('admin.pages.projects.add_project', $this->context);
    }

    public function modify_project($id)
    {
        $this->context['page_name'] = 'modify_project';
        $this->context['project'] = Project::findOrFail($id);
        $this->context['users'] = User::all();
        return view('admin.pages.projects.modify_project', $this->context);
    }


    public function store_project(StoreProject $request): RedirectResponse
    {
        $validatedData = $request->validated();

        $project = Project::create($validatedData);
//        if ($request->hasFile('files')) {
//            foreach ($request->file('files') as $file){
//                $name = $file->store('images');
//                $project->images()->save(
//                    Image::make([
//                        'path'=>$name
//                    ])
//                );
//            }
//        }
        MyHelper::storeImage($request, $project);
        $request->session()->flash('success', 'Project has been Created');
        return redirect()->route('projects.all');
    }

    public function update_project(StoreProject $request, $id): RedirectResponse
    {
        $validatedData = $request->validated();
        $project = Project::findOrFail($id);
        $project->fill($validatedData);
        MyHelper::updateImage($request, $project);
        $request->session()->flash('success', 'Project has been Updated');
        return redirect()->route('projects.all');
    }

    public function destroy_project(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        $request->session()->flash('success', 'Project was Deleted!');
        return redirect()->route('projects.all');
    }

    public function project_details($slug)
    {
        $sessionId = session()->getId();
        $counterKey = 'project-{$slug}-counter';
        $usersKey = 'project-{$slug}-users';
        $users = Cache::get($usersKey, []);
        $usersUpdate = [];
        $difference = 0;
        $now = now();

        foreach ($users as $session => $lastVisit){
            if($now->diffInMinutes($lastVisit) >= 1){
                $difference--;
            }else{
                $usersUpdate[$session] = $lastVisit;
            }
        }

        if (
            !array_key_exists($sessionId, $users)
            || $now->diffInMinutes($users[$sessionId]) >= 1
        ) {
            $difference++;
        }

        $usersUpdate[$sessionId] = $now;
        Cache::forever($usersKey, $usersUpdate);
        if (!Cache::has($counterKey)) {
            Cache::forever($counterKey, 1);
        }else{
            Cache::increment($counterKey, $difference);
        }

        $counter = Cache::get($counterKey);

        $project
            = Cache::remember("project-{$slug}", now()->addMinutes(30), function () use($slug){
            return Project::where('slug', $slug)->with('tags')->first();
        });
        if(!$project){
            return redirect()->route('projects.index');
        }
        $context = [
            'page_name' => 'project_details',
            'project' => $project,
            'counter' => $counter
        ];
        return view('core.projects.project-details', $context);
    }
}
