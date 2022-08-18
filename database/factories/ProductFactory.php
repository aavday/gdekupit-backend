<?php

namespace Database\Factories;

use App\Models\ProductBrand;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = $brand->name . ' ' . fake()->words(2, true);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => fake()->text(),
            'category_id' => $category->id,
            'brand_id' => $brand->id
        ];
    }
}
