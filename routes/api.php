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

//versi pendek
Route::resource('produk', 'ProdukController');

//versi panjang
// Route::get('produk', 'ProdukController@index');
// Route::get('produk/{id}', 'ProdukController@show');
// Route::post('produk', 'ProdukController@store');
// Route::put('produk/{id}', 'ProdukController@update');
// Route::delete('produk/{id}', 'ProdukController@destroy');

Route::get('poli', 'PoliController@index');
Route::get('poli/{id}', 'PoliController@show');
Route::post('poli', 'PoliController@store');
Route::put('poli/{id}', 'PoliController@update');
Route::delete('poli/{id}', 'PoliController@destroy');

Route::get('pegawai', 'PegawaiController@index');
Route::get('pegawai/{id}', 'PegawaiController@show');
Route::post('pegawai', 'PegawaiController@store');
Route::put('pegawai/{id}', 'PegawaiController@update');
Route::delete('pegawai/{id}', 'PegawaiController@destroy');

Route::resource('pasien', 'PasienController');

