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
        $product = Product::query()->inRandomOrder()->first();
        $merchant = ProductMerchant::query()->inRandomOrder()->first();
        $color = ProductColor::query()->inRandomOrder()->first();

        return [
            'name' => $product->name . ' ' . fake()->words(2, true),
            'price' => random_int(100, 200000),
            'product_id' => $product->id,
            'merchant_id' => $merchant->id,
            'color_id' => $color->id
        ];
    }
}
