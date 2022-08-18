<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = ucfirst(fake()->words(2, true));

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'merchant_website' => fake()->url(),
            'merchant_city' => fake()->city(),
        ];
    }
}
