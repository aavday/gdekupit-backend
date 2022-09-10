<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory
 */
class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = ucfirst(fake()->words(2, true));
        $parentCategory = (rand(1, 100) > 50) ? ProductCategory::factory()->create() : null;

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'parent_category_id' => ($parentCategory) ? $parentCategory->id : null
        ];
    }
}
