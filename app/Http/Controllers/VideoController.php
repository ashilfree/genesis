<?php

namespace App\Http\Controllers;

use App\Helper\MyHelper;
use App\Http\Requests\StoreVideo;
use App\Models\Video;
use Illuminate\Http\RedirectResponse;

class VideoController extends Controller
{
    private $context = [
        'category_name' => 'videos',
        'has_scrollspy' => 0,
        'scrollspy_offset' => ''
    ];
    public function all_videos()
    {
        $this->context['page_name'] = 'all_videos';
        $this->context['video'] = Video::all()->first();
        return view('admin.pages.videos.all_videos', $this->context);
    }

    public function modify_video()
    {
        $this->context['page_name'] = 'modify_video';
        $this->context['video'] = Video::all()->first();
        return view('admin.pages.videos.modify_video', $this->context);
    }

    public function update_video(StoreVideo $request): RedirectResponse
    {
        $validatedData = $request->validated();
        $video = Video::findOrFail(1);
        $video->fill($validatedData);
        MyHelper::updateImage($request, $video);
        $request->session()->flash('success', 'Video has been Updated');
        return redirect()->route('videos.all');
    }

}
