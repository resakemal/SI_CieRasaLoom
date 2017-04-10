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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/addpesanan', 'PesananController@create');
Route::post('/addpesanan/submit', 'PesananController@add');

Route::get('/daftarpesanan', 'PesananController@daftar');

Route::get('/editstatus', 'PesananController@status');
Route::post('/editstatus/submit', 'PesananController@edit');
