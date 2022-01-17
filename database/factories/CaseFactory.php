<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->title(),
            'room_number' => $this->faker->randomElement[range(1,5)],
            'area' => $this->faker->randomElement[range(40,1000,5)],
            'parking_number' => $this->faker->randomElement[range(1,10)],
            'bath_number' => $this->faker->randomElement[range(1,10)],
            'price' => $this->faker->randomElement[range(5000000,10000000000,10000000)],
            'deposit' => $this->faker->randomElement[range(1000000,100000000,1000000)],
            'rent' => $this->faker->randomElement[range(100000,10000000,100000)],
            'type' => $this->faker->randomElement(['FIELD', 'APARTMENT', 'VILLA']),
//            'avatar_path' => null,
            'contract' => $this->faker->randomElement(['FOR_SALE', 'FOR_RENT']),
            'is_vip' => $this->faker->boolean(),
            'description' => $this->faker->text(),

        ];
    }
}
