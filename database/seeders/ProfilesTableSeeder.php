<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile = Profile::factory()->create();
        $profile->image()->save(
            Image::make([
                'path'=> 'images/xmTuYdVe8CgEV3DIAejxFHse8qMh74I2ZcsaPvtR.jpg'
            ])
        );
    }
}
