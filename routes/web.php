<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemmallController;
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

Route::get('/', [HomeController::class,"index"]);
Route::get('/home', [HomeController::class,"index"]);

Route::group(["middleware"=>"guest"],function(){
    Route::get("/register",[AuthController::class,"registerIndex"]);
    Route::get("/login",[AuthController::class,"loginIndex"])->name("login");
});


Route::group(["middleware"=>"auth"],function(){
    Route::get("/itemmall",[ItemmallController::class,"index"]);
});

