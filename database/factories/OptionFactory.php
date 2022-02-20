<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'size_id'   =>$this->faker->numberBetween(1,10) ,
            'color'     =>$this->faker->randomElement([true,false]),
            'side'      =>$this->faker->randomElement([true,false]),
            'layout'    =>$this->faker->randomElement([true,false]),
            'wrapping'  =>$this->faker->numberBetween(1,11),
            'note'      =>$this->faker->text(),
            'price'     =>$this->faker->numberBetween(1,49),
        ];
    }
}
