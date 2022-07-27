<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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

        return [
            'name' => fake()->sentence(4),
            'review_text' => fake()->text(),
            'pluses' => fake()->sentence(3),
            'minuses' => fake()->sentence(3),
            'conclusion' => fake()->sentence(5),
            'is_positive' => fake()->boolean(),
            'product_id' => $product->id,
            'user_id' => $user->id
        ];
    }
}
