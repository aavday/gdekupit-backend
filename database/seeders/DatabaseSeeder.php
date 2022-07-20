<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductColorsTableSeeder::class);
        $this->call(ProductMerchantsTableSeeder::class);
        $this->call(ProductBrandsTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductOffersTableSeeder::class);
        $this->call(ProductReviewsTableSeeder::class);
    }
}
