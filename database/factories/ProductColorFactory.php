<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory
 */
class ProductColorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->colorName();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'color_hex' => fake()->hexColor(),
        ];
    }
}
