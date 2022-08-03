<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $url = $this->faker->url();
        $phone = $this->faker->unique()->randomNumber();
        // $phone = trim($phone,'+');
        return [
            'name'=> $this->faker->unique()->name(),
            'job'=> $this->faker->unique()->jobTitle(),
            'image' => $this->faker->unique()->word(),
            'description' => $this->faker->sentence(),
            'phone' => $phone,
            'social' => json_encode([
                $this->faker->url()
             ]),
        ];
    }
}
