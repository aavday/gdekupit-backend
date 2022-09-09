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

    public function show($slug) {
        return ProductOfferShowResource::make(
            ProductOffer::query()->where('slug', $slug)->first()
        );
    }
}
