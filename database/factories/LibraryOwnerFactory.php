<?php

namespace Database\Factories;

use App\Models\Wrapping;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibraryOwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'start_at'      => $this->faker->dateTime(),
            'expires_at'    =>$this->faker->dateTime(),
            'available'     =>$this->faker->numberBetween(0,1),
            'rating'        =>$this->faker->numberBetween(1,5),
            'option_id'     =>$this->faker->numberBetween(1,3),
        ];
    }
}

