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
    return view('welcome');
});

Route::get('/addtransaksi', function () {
    return View::make('addtransaksi');
});

Route::post('/addtransaksi/submit', 'TransaksiController@addtransaksi');

Route::get('/addmakanan', function () {
    return View::make('addmakanan');
});

Route::post('/addmakanan/submit', 'TransaksiController@addmakanan');

Route::post('/addmakanan/update', 'TransaksiController@addItem');

Route::get('/selectdate', function () {
    return View::make('selectdate');
});

Route::post('/daftartransaksi', 'TransaksiController@daftar');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/addpesanan', 'PesananController@create');
Route::post('/addpesanan', 'PesananController@create');
Route::post('/addpesanan/submit', 'PesananController@add');

Route::get('/daftarpesanan', 'PesananController@daftar');

Route::get('/editstatus{id}', 'PesananController@status');
Route::post('/editstatus/submit', 'PesananController@edit');