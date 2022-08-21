<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductShowResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return ProductIndexResource::collection(
            Product::query()->with('offers')->get()
        );
    }

    public function show($slug) {
        return ProductShowResource::make(
            Product::query()->where('slug', $slug)->first()
        );
    }
}
