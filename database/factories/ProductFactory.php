<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'category_id' => $this->faker->randomElement([1,2,3]),
            'name' => $this->faker->sentence(),
            'price' => $this->faker->randomDigit(),
            'stock' => $this->faker->randomDigit(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
