<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductBrandIndexResource;
use App\Http\Resources\ProductBrandShowResource;
use App\Models\ProductBrand;
use Illuminate\Http\Request;

class ProductBrandController extends Controller
{
    public function index() {
        return ProductBrandIndexResource::collection(
            ProductBrand::all()
        );
    }

    public function show($id) {
        return ProductBrandShowResource::make(
            ProductBrand::query()->where('id', $id)->firstOrFail()
        );
    }

    public function showBySlug($slug) {
        return ProductBrandShowResource::make(
            ProductBrand::query()->where('slug', $slug)->firstOrFail()
        );
    }
}
