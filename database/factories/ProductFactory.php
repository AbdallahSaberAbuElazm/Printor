<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'start'         =>$this->faker->dateTime().now(),
            'end'           =>$this->faker->dateTime().now(),
            'option_id'     =>$this->faker->numberBetween(1,3),
        ];
    }
}
