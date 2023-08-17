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
Route::get('/contact',function(){return view('home.contact');})->name("home.contact");
Route::get('/about', function () { // esto esta mal pues no no pasa por un controlador
    $data1 = "About us - Online Store";
    $data2 = "About us";
    $description = "This is an about page ...Hola profe :)";
    $author = "Developed by: Pablo Micolta Lopez";
    return view('home.about')->with("title", $data1)
                             ->with("subtitle", $data2)
                             ->with("description", $description)
                             ->with("author", $author);
})->name("home.about");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
//-----------------------------------------------------------------
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");
Route::get('/products/save', 'App\Http\Controllers\ProductController@verification')->name("product.verification");
//-------------------------------------------------------------------
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");

