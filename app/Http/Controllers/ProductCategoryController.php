<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCategoryIndexResource;
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
        return ProductCategoryIndexResource::collection(
            ProductCategory::query()->where('slug', $slug)->get()
        );
    }
}
