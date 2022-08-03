<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'title' => $this->faker->unique()->sentence(2),
            'small_description' => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'slug' => $this->faker->unique()->slug(),
            'admin_id' => $this->faker->numberBetween(1,10),
            'date' => $this->faker->date('Y-m-d'),
        ];
    }
}
