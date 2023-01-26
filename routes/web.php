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

Route::get('/','wings@index');
Route::get('home','wings@home');
Route::get('/detail/{id}','wings@detail');
Route::get('checkoutpage','wings@checkoutpage');
Route::get('/daftar','wings@daftarwings');
Route::post('/simpandata','wings@simpandata');
Route::post('/login','wings@masuk');
Route::get('/keluaradmin','wings@keluaradmin');
Route::post('/beli','wings@beli');
Route::post('/simpanpembelian','wings@simpanpembelian');
Route::get('/report','wings@report');


