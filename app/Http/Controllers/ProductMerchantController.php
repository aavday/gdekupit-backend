<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductMerchantIndexResource;
use App\Http\Resources\ProductMerchantShowResource;
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
        return ProductMerchantShowResource::make(
            ProductMerchant::query()->where('slug', $slug)->first()
        );
    }
}
