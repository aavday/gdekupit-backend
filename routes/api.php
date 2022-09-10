<?php

use App\Http\Controllers\ProductBrandController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductColorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductMerchantController;
use App\Http\Controllers\ProductOfferController;
use App\Http\Controllers\ProductReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products/', [ProductController::class, 'index']);
Route::get('/products/{slug}', [ProductController::class, 'show']);

Route::get('/product-brands/', [ProductBrandController::class, 'index']);
Route::get('/product-brands/{slug}', [ProductBrandController::class, 'show']);

Route::get('/product-categories/', [ProductCategoryController::class, 'index']);
Route::get('/product-categories-root/', [ProductCategoryController::class, 'rootCategories']);
Route::get('/product-categories/{slug}', [ProductCategoryController::class, 'show']);

Route::get('/product-colors/', [ProductColorController::class, 'index']);
Route::get('/product-colors/{slug}', [ProductColorController::class, 'show']);

Route::get('/product-merchants/', [ProductMerchantController::class, 'index']);
Route::get('/product-merchants/{slug}', [ProductMerchantController::class, 'show']);

Route::get('/product-offers/', [ProductOfferController::class, 'index']);
Route::get('/product-offers/{slug}', [ProductOfferController::class, 'show']);

Route::get('/product-reviews/', [ProductReviewController::class, 'index']);
Route::get('/product-reviews/{slug}', [ProductReviewController::class, 'show']);
