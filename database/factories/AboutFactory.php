<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title =$this->faker->sentence(4);
        $colorful_title =$this->faker->sentence(2);
        return [
            'title' => $title,
            'colorful_title' => $colorful_title,
            'description' => $this->faker->paragraph(10, true),
        ];
    }
}
