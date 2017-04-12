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

Route::get('/index', function () {
    return View::make('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/addpesanan', 'PesananController@create');
Route::post('/addpesanan', 'PesananController@create');
Route::post('/addpesanan/submit', 'PesananController@add');

Route::get('/daftarpesanan', 'PesananController@daftar');

Route::get('/editstatus{id}', 'PesananController@status');
Route::post('/editstatus/submit', 'PesananController@edit');
