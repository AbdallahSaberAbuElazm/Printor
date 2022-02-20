<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
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
            'stars'         =>$this->faker->numberBetween(1,5),
            'review'        =>$this->faker->text(),
            'evaluation'    =>$this->faker->name(),
        ];
    }
}
