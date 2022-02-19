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

            'option_id'     =>$this->faker->numberBetween(1,3),
        ];
    }
}

