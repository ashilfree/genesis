<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ServiceTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tagCount = Tag::all()->count();

        if (0 === $tagCount) {
            $this->command->info('No tags found, skipping assigning tags to services');
            return;
        }

        $howManyMin = (int)$this->command->ask('Minimum tags on service?', 0);
        $howManyMax = min((int)$this->command->ask('Maximum tags on service?', $tagCount),$tagCount);

        Service::all()->each(function (Service $service) use ($howManyMin, $howManyMax){
           $take = random_int($howManyMin, $howManyMax);
           $tags = Tag::inRandomOrder()->take($take)->get()->pluck('id');
           $service->tags()->sync($tags);
        });
    }
}
