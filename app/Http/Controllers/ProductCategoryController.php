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

    public function show($id) {
        return ProductCategoryShowResource::make(
            ProductCategory::query()->where('id', $id)->firstOrFail()
        );
    }

    public function showBySlug($slug) {
        return ProductCategoryShowResource::make(
            ProductCategory::query()->where('slug', $slug)->with('childCategories', function($q) {
                $q->has('childCategories')->orHas('products');
            })->firstOrFail()
        );
    }

    public function rootCategories() {
        return ProductCategoryIndexResource::collection(
            ProductCategory::query()->where('parent_category_id', null)->get()
        );
    }
}
