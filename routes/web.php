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

Route::get('/', function () {
    return view('welcome');
});
Route::get('produk', 'ProdukController@index');
Route::get('produk/{id}', 'ProdukController@show');
Route::post('produk', 'ProdukController@store');
Route::put('produk/{id}', 'ProdukController@update');
Route::delete('produk/{id}', 'ProdukController@destroy');