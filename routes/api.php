<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('produk', 'ProdukController@index');
Route::get('produk/{id}', 'ProdukController@show');
Route::post('produk', 'ProdukController@store');
Route::put('produk/{id}', 'ProdukController@update');
Route::delete('produk/{id}', 'ProdukController@destroy');
