<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
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
            'order_id'      =>$this->faker->numberBetween(1,200),
            'ticket_type_id'=>$this->faker->numberBetween(1,4),
            'title'         =>$this->faker->name(),
            'message'       =>$this->faker->text(),
            'status'        =>$this->faker->randomElement(['pending','waiting']),
        ];
    }
}
