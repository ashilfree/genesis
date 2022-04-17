<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'profession' => 'IT Engineer',
            'phone' => '0656186390',
            'locale' => 'fr',
            'fb_link' => '',
            'instagram_link' => '',
            'twitter_link' => '',
            'pinterest_link' => '',
        ];
    }
}
