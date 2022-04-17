<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Slider;
use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliders = Slider::factory()->count(3)->create();
        foreach ($sliders as $slider){
            $slider->image()->save(
                Image::make([
                    'path'=> 'images/NuEfi8jtnP3pdxGqokV3Jp9b1W3r0ANxr2ytMZGD.jpg'
                ])
            );
        }
    }
}
