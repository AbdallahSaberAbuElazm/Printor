<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'            =>$this->faker->numberBetween(1,200),
            'library_owner_id'   =>$this->faker->numberBetween(1,50),
            'order_id'           =>$this->faker->numberBetween(1,100),
            'payment_id'         =>$this->faker->numberBetween(1,3),
            'status'             =>$this->faker->randomElement(['pending','delivered','shipped','at warehouse']),
            'shipment_date'      =>Carbon::now(),
            'order_confirmed_qr' =>$this->faker->text(),
            'order_confirmed'    =>$this->faker->randomElement([true,false])
        ];
    }
}
