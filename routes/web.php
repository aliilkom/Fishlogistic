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
Route::get('/', function () {
	if(!Auth::check()){
		return redirect('/login');
	 }
    if(Auth::user()->ClassUser->ClassUser == 'Super Admin'){
		return redirect('/superadmin');
	 }
	 if(Auth::user()->ClassUser->ClassUser == 'Owner'){
		 return redirect('/owner');
	 }
	 if(Auth::user()->ClassUser->ClassUser == 'Manager'){
		 return redirect('/manager');
	 }
	 if(Auth::user()->ClassUser->ClassUser == 'Admin'){
		 return redirect('/admin');
	 }
});

Route::group(['prefix' => 'superadmin', 'middleware' => ['auth', 'role:Super Admin']], function()
{
	
});
Route::group(['prefix' => 'owner', 'middleware' => ['auth', 'role:Owner']], function()
{
	
});
Route::group(['prefix' => 'manager', 'middleware' => ['auth', 'role:Manager']], function()
{
	
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:Admin']], function()
{
	
});

//Route Login & Register
Auth::routes();
//Route Profil
Route::get('profil', function () {
    return view('profil.index');
});
//Route WMS
Route::get('wmsberanda', function () {
    return view('wms.beranda');
});
//Route Rental
Route::get('rentalberanda', function () {
    return view('rental.beranda');
});