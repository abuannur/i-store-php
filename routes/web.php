<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/food-product', function () {
    return view('pages.foodproduct');
});

Route::get('/fashion-product', function () {
    return view('pages.fashionproduct');
});

Route::get('/electronics-product', function () {
    return view('pages.electronicsproduct');
});


