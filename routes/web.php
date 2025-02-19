<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', action: [HomeController::class,'index']);


Route::get('/category/food-beverage', action: [ProductsController::class,'foodBeverage']);
Route::get('/category/beauty-health', action: [ProductsController::class,'beautyHealth']);
Route::get('/category/home-care', action: [ProductsController::class,'homeCare']);
Route::get('/category/baby-kid', action: [ProductsController::class,'babyKid']);

Route::get('/user/{id}/name/{name}', action: [UserController::class,'profile']);

Route::get('/penjualan', action: [PenjualanController::class,'index']);



