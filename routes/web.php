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
//Halaman Awal
Route::get('/', function () {
    return view('welcome');
});
//Route Login & Register
Auth::routes();
//Route WMS
Route::get('berandawms', function () {
    return view('wms.beranda');
});