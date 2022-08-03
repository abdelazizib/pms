<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ProductName = $this->faker->unique()->name();
        return [
            'name'=>$ProductName,
            'description'=>$this->faker->paragraph(),
            'price'=> $this->faker->numberBetween(50,1000),
            'image'=> $this->faker->imageUrl(),
            'slug'=> Str::slug($ProductName),
            'category_id'=> $this->faker->numberBetween(1,5),
        ];
    }
}
