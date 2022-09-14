<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductOfferIndexResource;
use App\Http\Resources\ProductOfferShowResource;
use App\Models\ProductOffer;
use Illuminate\Http\Request;

class ProductOfferController extends Controller
{
    public function index() {
        return ProductOfferIndexResource::collection(
            ProductOffer::all()
        );
    }

    public function show($id) {
        return ProductOfferShowResource::make(
            ProductOffer::query()->where('id', $id)->firstOrFail()
        );
    }

    public function showBySlug($slug) {
        return ProductOfferShowResource::make(
            ProductOffer::query()->where('slug', $slug)->firstOrFail()
        );
    }
}
