<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'video_link' => 'https://www.youtube.com/watch?v=KnEXrbAQyIo&list=RDQZXc39hT8t4&index=9',
            'learn_more_link' => 'http://127.0.0.1:8000/about'
        ];
    }
}
