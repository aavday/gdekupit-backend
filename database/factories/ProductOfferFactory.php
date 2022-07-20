<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductMerchant;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ProductOfferFactory extends Factory
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
            'name' => fake()->sentence(5),
            'price' => random_int(100, 200000),
            'product_id' => Product::factory(),
            'merchant_id' => ProductMerchant::factory(),
            'color_id' => ProductColor::factory()
        ];
    }
}
