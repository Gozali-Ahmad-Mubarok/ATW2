<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\kategoricontroller;
use Illuminate\Support\Facades\Auth;
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

Route::get('beranda', [HomeController::class, 'showberanda']);
Route::get('UserProduk', [HomeController::class, 'showberanda']);
Route::get('register',  [AuthController::class, 'showregister']);
Route::get('home',  [HomeController::class, 'showhome']);
// Route::get('UserProduk/{UserProduk}',  [HomeController::class, 'showhome']);
Route::get('it_shop_detail', [HomeController::class, 'showit_shop_detail']);
Route::get('it_card', [HomeController::class, 'showit_card']);
Route::get('template.base',  [HomeController::class, 'showtemplate.base']);
Route::get('kategori', [HomeController::class, 'showkategori'] );


Route::get('produk', [produkcontroller::class, 'index']);
Route::get('produk/create', [produkcontroller::class, 'create']);
Route::post('produk', [produkcontroller::class, 'store']); 
Route::get('produk/{produk}', [produkcontroller::class, 'show']);  
Route::get('produk/{produk}/edit', [produkcontroller::class, 'edit']); 
Route::put('produk/{produk}', [produkcontroller::class, 'update']);  
Route::delete('produk/{produk}', [produkcontroller::class, 'destroy']); 



Route::resource('user', UserController::class);
Route::resource('kategori', kategoricontroller::class); 
Route::post('produk/filter',[produkcontroller:: class, 'filter']);



Route::get('users', [usercontroller::class, 'index']); 
Route::post('users', [usercontroller::class, 'store']); 
Route::get('users/{user}', [usercontroller::class, 'show']);   

Route::get('Login', [AuthController::class, 'showLogin']);
Route::post('Login', [AuthController::class, 'LoginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('register', [AuthController::class, 'showregister']);
Route::post('register', [AuthController::class, 'storeregister']);

 
Route::get('home', [HomeController::class, 'showhome']);
Route::get('it_shop_detail/{it_shop_detail}', [HomeController::class, 'showit_shop_detail']); 