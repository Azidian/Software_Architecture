<?php

use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\ProductApiControllerV2;
use App\Http\Controllers\Api\ProductApiControllerV3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

$apiV1ProductRoute = '/products';
$apiV2ProductRoute = '/v2/products';
$apiV3ProductRoute = '/v3/products';

Route::get($apiV1ProductRoute, [ProductApiController::class, 'index'])->name('api.product.index');
Route::get($apiV1ProductRoute.'/{id}', [ProductApiController::class, 'show'])->name('api.product.show');

Route::get($apiV2ProductRoute, [ProductApiControllerV2::class, 'index'])->name('api.v2.product.index');
Route::get($apiV2ProductRoute.'/{id}', [ProductApiControllerV2::class, 'show'])->name('api.v2.product.show');

Route::get($apiV3ProductRoute, [ProductApiControllerV3::class, 'index'])->name('api.v3.product.index');
Route::get($apiV3ProductRoute.'/paginate', [ProductApiControllerV3::class, 'paginate'])->name('api.v3.product.paginate');

Route::post($apiV3ProductRoute, [ProductApiControllerV3::class, 'store'])->name('api.v3.product.store');
