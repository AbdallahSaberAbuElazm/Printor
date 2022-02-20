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
            'title'         =>$this->faker->name(),
            'file_id'          =>$this->faker->numberBetween(1,5),
            'price'         =>$this->faker->numberBetween(1,50),
            'no_of_copies'  =>$this->faker->numberBetween(1,10),
            'option_id'     =>$this->faker->numberBetween(1,3),
        ];
    }
}
