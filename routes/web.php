<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/history-masuk', 'BarangController@history_masuk');

Route::group(['middleware'=>'web'], function () {

	Route::group(['middleware'=>['auth', 'role:admin']], function () {
		Route::resource('kategori_barang', 'Kategori_barangController');
		Route::resource('satuan_barang', 'SatuanController');
		Route::resource('barang', 'BarangController');
		Route::resource('penjualan', 'PenjualanController');
	});

});
