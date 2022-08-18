<?php

namespace Database\Seeders;

use App\Models\ProductBrand;
use Illuminate\Database\Seeder;

class ProductBrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductBrand::factory(10)->create();
    }
}
