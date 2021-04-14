<?php

use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/Hello',function() {
	return 'Hello World';
});
Route::get('/belajar', function() {
	echo '<h1>Hello World</h1>';
	echo '<p>Sedang belajar Laravel</p>';
});
Route::get('page/{nomer}', function($nomor){
	return 'Ini Halaman ke-'.$nomor;
});
Route::get('/gambar', function(){
	return view('gambar');
});
Route::resource('/user','ManagementUserController');
Route::get("/home",function(){
	return view("homepage");
});*/

Route::group(['namespace'=> 'Frontend'], function(){
	Route::resource('home', 'HomeController');
});

Route::group(['namespace'=>'Backend'], function()
{
	Route::resource('dashboard', 'DashboardController');
});