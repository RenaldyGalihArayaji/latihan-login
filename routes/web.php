<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarProductController;
use App\Http\Controllers\GroupPenggunaController;
use App\Http\Controllers\DaftarPenggunaController;
use App\Http\Controllers\CategoryProductController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// login 
Route::get('/login', function () {
    return view('/login.login');
});
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'login'])->middleware('guest');
Route::get('/logout',[LoginController::class,'logout'])->middleware('auth');


// Registrasi 
Route::get('/registrasi', function () {
    return view('/login.registrasi');
});


// landing page
Route::get('/', function () {
    return view('/landing-page.home',[ "title" => "Home" ]);
});

// Dashboard
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');


// Category Product
Route::get('/category-product',[CategoryProductController::class,'index'])->middleware('auth');
Route::get('/category-create',[CategoryProductController::class,'create'])->middleware('auth');
Route::post('/category-store',[CategoryProductController::class,'store'])->middleware('auth');
Route::get('/category-edit/{id}',[CategoryProductController::class,'edit'])->middleware('auth');
Route::put('/category-update',[CategoryProductController::class,'update'])->middleware('auth');
Route::get('/category-delete/{id}',[CategoryProductController::class,'delete'])->middleware('auth');


// Daftar Product
Route::get('/daftar-product',[DaftarProductController::class,'index'])->middleware('auth');
Route::get('/daftar-create',[DaftarProductController::class,'create'])->middleware('auth');
Route::post('/daftar-store',[DaftarProductController::class,'store'])->middleware('auth');
Route::get('/daftar-edit/{id}',[DaftarProductController::class,'edit'])->middleware('auth');
Route::put('/daftar-update',[DaftarProductController::class,'update'])->middleware('auth');
Route::get('/daftar-delete/{id}',[DaftarProductController::class,'delete'])->middleware('auth');

//Group pengguna
Route::get('/group-pengguna',[GroupPenggunaController::class,'index'])->middleware('auth');
Route::get('/group-create',[GroupPenggunaController::class,'create'])->middleware('auth');
Route::post('/group-store',[GroupPenggunaController::class,'store'])->middleware('auth');
Route::get('/group-edit/{id}',[GroupPenggunaController::class,'edit'])->middleware('auth');
Route::put('/group-update',[GroupPenggunaController::class,'update'])->middleware('auth');
Route::get('/group-delete/{id}',[GroupPenggunaController::class,'delete'])->middleware('auth');

// Daftar Pengguna
Route::get('/daftar-pengguna',[DaftarPenggunaController::class,'index'])->middleware('auth');
Route::get('/daftar-create',[DaftarPenggunaController::class,'create'])->middleware('auth');
Route::post('/daftar-store',[DaftarPenggunaController::class,'store'])->middleware('auth');
Route::get('/daftar-edit/{id}',[DaftarPenggunaController::class,'edit'])->middleware('auth');
Route::put('/daftar-update',[DaftarPenggunaController::class,'update'])->middleware('auth');
Route::get('/daftar-delete/{id}',[DaftarPenggunaController::class,'delete'])->middleware('auth');

// slider
Route::get('/slider',[SliderController::class,'index'])->middleware('auth');
Route::get('/slider-create',[SliderController::class,'create'])->middleware('auth');
Route::post('/slider-store',[SliderController::class,'store'])->middleware('auth');
Route::get('/slider-edit/{id}',[SliderController::class,'edit'])->middleware('auth');
Route::put('/slider-update',[SliderController::class,'update'])->middleware('auth');
Route::get('/slider-delete/{id}',[SliderController::class,'delete'])->middleware('auth');
