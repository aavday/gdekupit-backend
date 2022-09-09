<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory
 */
class ProductReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $product = Product::query()->inRandomOrder()->first();
        $user = User::query()->inRandomOrder()->first();
        $name = fake()->sentence(4);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'review_text' => fake()->text(),
            'pluses' => fake()->sentence(3),
            'minuses' => fake()->sentence(3),
            'rating' => fake()->numberBetween(0, 5),
            'product_id' => $product->id,
            'user_id' => $user->id
        ];
    }
}
