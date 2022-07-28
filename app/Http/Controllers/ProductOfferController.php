<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductOfferResource;
use App\Models\ProductOffer;
use Illuminate\Http\Request;

class ProductOfferController extends Controller
{
    public function index() {
        return ProductOfferResource::collection(
            ProductOffer::all()
        );
    }
}
