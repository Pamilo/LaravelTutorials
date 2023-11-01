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

/*Route::get('/', function () {
    return view('welcome');
});*/
// el name es como lo vamos a "nombrar" en el codigo para llamar la pagina
Route::get('/','App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/contact','App\Http\Controllers\HomeController@contact')->name("home.contact");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
//-----------------------------------------------------------------
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");
Route::get('/products/save', 'App\Http\Controllers\ProductController@verification')->name("product.verification");
//-------------------------------------------------------------------
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");
Route::get('/reviews/delete/{id}', 'App\Http\Controllers\ReviewController@delete')->name("review.delete");
//-----------------------------------------------------------------------------------------------
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");
Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name("cart.removeAll");
//------------------------------------------------------------------------------------------------------
Route::get('/image', 'App\Http\Controllers\ImageController@index')->name("image.index");
Route::post('/image/save', 'App\Http\Controllers\ImageController@save')->name("image.save");
//---------------------------------------------------------------------------------------------------
//lo mismo que el de arriba pero sin inversion de dependencias
Route::get('/image-not-di', 'App\Http\Controllers\ImageNotDIController@index')->name("imagenotdi.index");
Route::post('/image-not-di/save', 'App\Http\Controllers\ImageNotDIController@save')->name("imagenotdi.save");




