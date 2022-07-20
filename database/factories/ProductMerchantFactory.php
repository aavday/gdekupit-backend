<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ProductMerchantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->words(),
            'merchant_website' => fake()->url(),
            'merchant_city' => fake()->city(),
        ];
    }
}
