<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Video;
use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $video = Video::factory()->create();
        $video->image()->save(
            Image::make([
                'path'=> 'images/Jouy0mwvvU6pPL8wEmffQ8H24lXPxefaQSPevKII.png'
            ])
        );
    }
}
