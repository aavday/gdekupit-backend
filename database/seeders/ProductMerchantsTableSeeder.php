<?php

namespace Database\Seeders;

use App\Models\ProductMerchant;
use Illuminate\Database\Seeder;

class ProductMerchantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductMerchant::factory(10)->create();
    }
}
