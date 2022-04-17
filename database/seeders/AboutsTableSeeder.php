<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Image;
use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = About::factory()->create();
        $about->image()->save(
            Image::make([
                'path'=> 'images/MmCLnCOH4h5iLZ0ky1ZaVsZubT8IEGYUDXexx4PO.png'
            ])
        );

    }
}
