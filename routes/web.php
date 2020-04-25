<?php

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

Route::GET('products/index', 'ProductsController@index');

Route::GET('products/{id}/edit', 'ProductsController@edit');
Route::POST('products/{id}/edit', 'ProductsController@update');

Route::GET('products/create', 'ProductsController@create');
Route::POST('products/create', 'ProductsController@store');

Route::get('products/cart', 'ProductsController@cart');
 
Route::get('poducts/add-to-cart/{id}', 'ProductsController@addToCart');