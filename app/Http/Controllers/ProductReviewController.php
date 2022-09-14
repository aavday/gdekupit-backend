<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductReviewResource;
use App\Models\ProductReview;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function index() {
        return ProductReviewResource::collection(
            ProductReview::all()
        );
    }

    public function show($id) {
        return ProductReviewResource::collection(
            ProductReview::query()->where('id', $id)->firstOrFail()
        );
    }

    public function showBySlug($slug) {
        return ProductReviewResource::collection(
            ProductReview::query()->where('slug', $slug)->firstOrFail()
        );
    }
}
