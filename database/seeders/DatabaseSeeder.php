<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if($this->command->confirm('Do you want to refresh the database?', true)){
            $this->command->call('migrate:refresh');
            $this->command->info('Database was refreshed');
        }

//        Cache::tags(['service'])->flush();

        $this->call([
            UsersTableSeeder::class,
            ProfilesTableSeeder::class,
            ServicesTableSeeder::class,
//            TagsTableSeeder::class,
//            ServiceTagTableSeeder::class,
            AboutsTableSeeder::class,
            VideosTableSeeder::class,
            SlidersTableSeeder::class
        ]);
    }
}
