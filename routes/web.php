<?php

use App\Http\Controllers\ParfumController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\ParfumController@index');

Route::get('cart_product', function () {
    return view('cart_product');
});

/*CART/PANIER ROUTE*/
Route::post('/panier/ajouter','App\Http\Controllers\CartController@store')->name('cart.store');

Route::get('customer_info', function () {
    return view('customer_info');
});

Route::get('validate_page', function () {
    return view('validate_page');
});

Route::get('last_page', function () {
    return view('last_page');
});


