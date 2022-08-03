<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'phone'=>$this->faker->phoneNumber(),
            'date'=>date('Y-m-d'),
            'time'=>'',
            'guest'=>rand(1,5),
            'status'=>$this->faker->numberBetween(0,1),
        ];
    }
}
