<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductColorResource;
use App\Models\ProductColor;
use Illuminate\Http\Request;

class ProductColorController extends Controller
{
    public function index() {
        return ProductColorResource::collection(
            ProductColor::all()
        );
    }

    public function show($slug) {
        return ProductColorResource::collection(
            ProductColor::query()->where('slug', $slug)->get()
        );
    }
}
