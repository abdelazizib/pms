<?php

namespace Database\Factories;

use App\Models\Reviews;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewsFactory extends Factory
{
    protected $model = Reviews::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'image' => 'image/'.Str::random(3).'_'. time() .'.png',
            'description' => $this->faker->paragraph(),
        ];
    }
}
