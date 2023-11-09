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

Route::post("/auth/login", function (Request $request) {

    if (\Illuminate\Support\Facades\Auth::attempt($request->all())) {
        $user = \Illuminate\Support\Facades\Auth::user();

        $authToken = $user->createToken("auth-token");
        return ['token' => $authToken->plainTextToken];
    }

    return ['token' => "null"];
});

Route::group(['namespace' => "App\Http\Controllers", 'middleware' => "auth:sanctum"], function () {
    Route::apiResource("products", \App\Http\Controllers\ProductController::class);
});
