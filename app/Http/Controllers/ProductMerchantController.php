<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductMerchantIndexResource;
use App\Models\ProductMerchant;
use Illuminate\Http\Request;

class ProductMerchantController extends Controller
{
    public function index() {
        return ProductMerchantIndexResource::collection(
            ProductMerchant::all()
        );
    }

    public function show($slug) {
        return ProductBrandResource::collection(
            ProductBrand::query()->where('slug', $slug)->get()
        );
    }
}
