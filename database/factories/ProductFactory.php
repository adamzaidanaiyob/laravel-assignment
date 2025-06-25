<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'price' => $this->faker->randomFloat(2, 10, 999),
            'details' => $this->faker->paragraph,
            'publish' => $this->faker->randomElement(['yes', 'no']),
        ];
    }
}
