<?php

namespace Database\Factories;

use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ProductBrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */
    public function definition()
    {
        return [
            'name' => fake()->words(),
        ];
    }
}
