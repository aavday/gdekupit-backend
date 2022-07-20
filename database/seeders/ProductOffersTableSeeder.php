<?php

namespace Database\Seeders;

use App\Models\ProductOffer;
use Illuminate\Database\Seeder;

class ProductOffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductOffer::factory(300)->create();
    }
}
