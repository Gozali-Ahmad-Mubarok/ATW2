<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/informatika',function(){
	return view("informatika");
});

Route::get('/elektro',function(){
	return view("elektro");
});

Route::get('/sipil',function(){
	return view("sipil");
});

Route::get('/mesin',function(){
	return view("mesin");
});

Route::get('/Login',function(){
	return view("Login");
});

Route::get('/register',function(){
	return view("register");
});

Route::get('/home',function(){
	return view("home");
});

Route::get('/it_shop_detail',function(){
	return view("it_shop_detail");
});
Route::get('/it_card',function(){
	return view("it_card");
});