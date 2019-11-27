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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/kategori','KategoriControllers');
Route::resource('/produk','ProdukControllers');

Route::get('/', 'FrontendControllers@index');
Route::get('/produks', 'FrontendControllers@produks')->name('produks');
Route::get('/produks/produkdetails/{produks}', 'FrontendControllers@produkdetails')->name('produks');
Route::get('/kategori/produks/{id}', 'FrontendControllers@filter')->name('kategori');
