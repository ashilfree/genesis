<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title =$this->faker->sentence(2);
        return [
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'description' => $this->faker->paragraph(10, true),
            'sub_title' => $this->faker->sentence(5),
            'sub_description' => $this->faker->paragraph(10, true)
        ];
    }
}
