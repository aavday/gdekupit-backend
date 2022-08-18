<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductBrandIndexResource;
use App\Models\ProductBrand;
use Illuminate\Http\Request;

class ProductBrandController extends Controller
{
    public function index() {
        return ProductBrandIndexResource::collection(
            ProductBrand::all()
        );
    }

    public function show($slug) {
        return ProductBrandIndexResource::collection(
            ProductBrand::query()->where('slug', $slug)->get()
        );
    }
}
