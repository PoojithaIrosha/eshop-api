<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post("/api/auth/login", function (Request $request) {

    if (\Illuminate\Support\Facades\Auth::attempt($request->all())) {
        $user = \Illuminate\Support\Facades\Auth::user();

        $authToken = $user->createToken("auth-token");
        return ['token' => $authToken->plainTextToken];
    }

    return ['token' => "null"];
});
