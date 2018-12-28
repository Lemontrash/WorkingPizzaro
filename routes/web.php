<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/products', "\\".\App\Http\Controllers\ProductsController::class)->name('products');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/product/{id}', 'SingleProductController@show')->name('single');
//Route::get('/product/{id}', 'SingleProductController@__invoke')->name('single');

Route::get('/locator', function () {
    return view('pages.locator');
})->name('locator');

Route::get('/checkout', function () {
    return view('pages.checkout');
})->name('checkout');
