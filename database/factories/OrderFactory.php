<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'       =>$this->faker->numberBetween(1,200),
            'library_owner_id' =>$this->faker->numberBetween(1,50),
            'cart_id'       =>$this->faker->numberBetween(1,100),
            'order_date'    =>Carbon::now(),
            'payment_id'     =>$this->faker->numberBetween(1,3),
            'delivery'       =>$this->faker->randomElement([true,false]),
            'total_cost'     =>$this->faker->numberBetween(1,100),
        ];
    }
}
