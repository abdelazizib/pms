<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'total'=>floatval($this->faker->randomNumber(2)),
            'name'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'address'=>$this->faker->address(),
            'apartment'=>$this->faker->randomNumber(2),
            'country'=>$this->faker->country(),
            'state'=>$this->faker->word(),
            'zip'=>rand(12500,19000),
            'payment_method'=>'cash',
            'payment_status'=> 1,
            'phone'=>$this->faker->phoneNumber(),
            'order_date'=> date('Y-m-d h:i:s'),
            'user_id'=>$this->faker->numberBetween(1,10),
            'status'=>$this->faker->randomElement(['pending','success','rejected','cancelled','shipped']),
        ];
    }
}
