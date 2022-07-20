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
        ProductMerchant::factory(20)->create();
    }
}
