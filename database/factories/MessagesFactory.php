<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subject'=>$this->faker->words(5),
            'content'=>$this->faker->paragraph(),
            'name'=>$this->faker->name(),
            'email'=>$this->faker->unique()->email(),
            'status'=>'pending',
        ];
    }
}
