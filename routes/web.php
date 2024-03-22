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

Route::get('/food', function () {
    return view('pages.food');
});

Route::get('/clothing', function () {
    return view('pages.clothing');
});

Route::get('/electronics', function () {
    return view('pages.electronics');
});

Route::get('/login', function () {
    return view('pages.auth.login');
});
Route::get('/signup', function () {
    return view('pages.auth.signup');
});

Route::get('/add-product', function () {
    return view('pages.add');
});

Route::get('/view-cart', function () {
    return view('pages.cart');
});




