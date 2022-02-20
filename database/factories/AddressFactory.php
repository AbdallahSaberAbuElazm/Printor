<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'street_number' =>$this->faker->streetName(),
            'street_name'   =>$this->faker->streetName(),
            'city'          =>$this->faker->city(),
            'governorate'   =>$this->faker->city(),
            'country'       =>$this->faker->country(),
            'post_code'     =>$this->faker->postcode(),
        ];
    }
}
