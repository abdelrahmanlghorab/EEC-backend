<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource('products', App\Http\Controllers\Api\ProductApiController::class);
Route::get('/products/search', [App\Http\Controllers\Api\ProductApiController::class, 'search']);

Route::get('/categories', [App\Http\Controllers\Api\CategoryApiController::class, 'index']);