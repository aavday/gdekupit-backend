<?php

namespace Database\Factories;

use App\Models\ProductBrand;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ProductFactory extends Factory
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
            'name' => fake()->sentence(3),
            'description' => fake()->text(),
            'category_id' => ProductCategory::factory(),
            'brand_id' => ProductBrand::factory()
        ];
    }
}
