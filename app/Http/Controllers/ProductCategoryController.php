<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCategoryIndexResource;
use App\Http\Resources\ProductCategoryShowResource;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index() {
        return ProductCategoryIndexResource::collection(
            ProductCategory::all()
        );
    }

    public function show($slug) {
        return ProductCategoryShowResource::make(
            ProductCategory::query()->where('slug', $slug)->first()
        );
    }
}
