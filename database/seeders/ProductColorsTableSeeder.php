<?php

namespace Database\Seeders;

use App\Models\ProductColor;
use Illuminate\Database\Seeder;

class ProductColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductColor::factory(20)->create();
    }
}
