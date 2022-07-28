<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductBrandResource;
use App\Models\ProductBrand;
use Illuminate\Http\Request;

class ProductBrandController extends Controller
{
    public function index() {
        return ProductBrandResource::collection(
            ProductBrand::all()
        );
    }
}
