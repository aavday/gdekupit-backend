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
        $this->call([
            UsersTableSeeder::class,
            ProductColorsTableSeeder::class,
            ProductMerchantsTableSeeder::class,
            ProductBrandsTableSeeder::class,
            ProductCategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            ProductOffersTableSeeder::class,
            ProductReviewsTableSeeder::class
        ]);
    }
}
