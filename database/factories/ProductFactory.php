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
        $brand = ProductBrand::query()->inRandomOrder()->first();
        $category = ProductCategory::query()->inRandomOrder()->first();

        return [
            'name' => $brand->name . ' ' . fake()->words(2, true),
            'description' => fake()->text(),
            'category_id' => $category->id,
            'brand_id' => $brand->id
        ];
    }
}
