<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductMerchantResource;
use App\Models\ProductMerchant;
use Illuminate\Http\Request;

class ProductMerchantController extends Controller
{
    public function index() {
        return ProductMerchantResource::collection(
            ProductMerchant::all()
        );
    }
}
