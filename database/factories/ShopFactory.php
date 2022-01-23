<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
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
            'weight' => $this->faker->randomElement(range(1,100)),
            'size' => $this->faker->randomElement(range(1,100)),
            'user_id' => $this->faker->randomElement(range(1,100)),
            'material' => $this->faker->name(),
            'color' => $this->faker->colorName(),
            'guaranty' => $this->faker->randomElement(['YES', 'NO']),
            'price' => $this->faker->randomElement(range(1000,10000000000,10000)),
            'status' => $this->faker->randomElement(['AVAILABLE', 'UNAVAILABLE']),
//            'avatar_path' => null,
            'is_vip' => $this->faker->boolean(),
            'description' => $this->faker->text(),
        ];
    }
}
