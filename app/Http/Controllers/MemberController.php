<?php

namespace App\Http\Controllers;

use App\Helper\MyHelper;
use App\Http\Requests\StoreMember;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MemberController extends Controller
{
    private $context = [
        'category_name' => 'members',
        'has_scrollspy' => 0,
        'scrollspy_offset' => ''
    ];

//    public function member()
//    {
//        $members = Cache::tags(['member'])->remember('members', now()->addMinutes(30), function (){
//            return Member::latest()->get();
//        });
//        $context = [
//            'page_name' => 'member',
//            'members' => $members
//        ];
//        return view('core.members.member', $context);
//    }

    public function all_members()
    {
        $this->context['page_name'] = 'all_members';
        $this->context['members'] = Profile::all();
        return view('admin.pages.members.all_members', $this->context);
    }

    public function add_member()
    {
        $this->context['page_name'] = 'add_member';
        $this->context['users'] = User::all();
        return view('admin.pages.members.add_member', $this->context);
    }

    public function modify_member($id)
    {
        $this->context['page_name'] = 'modify_member';
        $this->context['member'] = Profile::findOrFail($id);
        $this->context['users'] = User::all();
        return view('admin.pages.members.modify_member', $this->context);
    }


    public function store_member(StoreMember $request): RedirectResponse
    {
        $validatedData = $request->validated();
        $member = Profile::create($validatedData);
        MyHelper::storeImage($request, $member);
        $request->session()->flash('success', 'Member has been Created');
        return redirect()->route('members.all');
    }

    public function update_member(StoreMember $request, $id): RedirectResponse
    {
        $validatedData = $request->validated();
        $member = Profile::findOrFail($id);
        $member->fill($validatedData);
        MyHelper::updateImage($request, $member);
        $request->session()->flash('success', 'Member has been Updated');
        return redirect()->route('members.all');
    }

    public function destroy_member(Request $request, $id)
    {
        $member = Profile::findOrFail($id);
        $member->delete();
        $request->session()->flash('success', 'Member was Deleted!');
        return redirect()->route('members.all');
    }

    public function member_details($slug)
    {
        $sessionId = session()->getId();
        $counterKey = 'member-{$slug}-counter';
        $usersKey = 'member-{$slug}-users';
        $users = Cache::get($usersKey, []);
        $usersUpdate = [];
        $difference = 0;
        $now = now();

        foreach ($users as $session => $lastVisit) {
            if ($now->diffInMinutes($lastVisit) >= 1) {
                $difference--;
            } else {
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
        } else {
            Cache::increment($counterKey, $difference);
        }

        $counter = Cache::get($counterKey);

        $member
            = Cache::remember("member-{$slug}", now()->addMinutes(30), function () use ($slug) {
            return Profile::where('slug', $slug)->with('tags')->first();
        });
        if (!$member) {
            return redirect()->route('members.index');
        }
        $context = [
            'page_name' => 'member_details',
            'member' => $member,
            'counter' => $counter
        ];
        return view('core.members.member-details', $context);
    }
}
