<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->name();
        return [
            'title'=>$title,
            'image'=>"https://dummyimage.com/600x400/000/fff.gif&text=$title",
            'description'=>$this->faker->paragraph(),
        ];
    }
}
