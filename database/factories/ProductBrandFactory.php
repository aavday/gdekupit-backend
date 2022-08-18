<?php

namespace Database\Factories;

use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = ucfirst(fake()->words(2, true));

        return [
            'name' => $name,
            'slug' => Str::slug($name)
        ];
    }
}
