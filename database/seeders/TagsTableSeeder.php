<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = collect(['Why Techno', '24/7 SUPPORT', 'Help disk', 'Tech Support', 'Soft Install']);

        $tags->each(function ($tag){
            Tag::create([
                'name' => $tag,
                'content' => 'Phosfluorescently pontificates fully researched it.'
            ]);
        });
    }
}
