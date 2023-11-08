<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('products/{product}', [\App\Http\Controllers\ProductController::class, 'show']);

Route::group(['namespace' => "App\Http\Controllers", 'middleware' => "auth:sanctum"], function () {
    Route::post('products', [\App\Http\Controllers\ProductController::class, 'store']);
    Route::put('products/{product}', [\App\Http\Controllers\ProductController::class, 'update']);
    Route::patch('products/{product}', [\App\Http\Controllers\ProductController::class, 'update']);
    Route::delete('products/{product}', [\App\Http\Controllers\ProductController::class, 'destroy']);
});
