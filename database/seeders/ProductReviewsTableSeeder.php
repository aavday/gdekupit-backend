<?php

namespace Database\Seeders;

use App\Models\ProductReview;
use Illuminate\Database\Seeder;

class ProductReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductReview::factory(20)->create();
    }
}
