<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemmallController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::post("/logout",[LoginController::class,"logout"]);

Route::group(["middleware"=>"guest"],function(){
    Route::get("/register",[RegisterController::class,"registerIndex"]);
    Route::get("/login",[LoginController::class,"loginIndex"])->name("login");

    Route::post("/register",[RegisterController::class,"registerUser"]);
    Route::post("/login",[LoginController::class,"loginUser"]);
});


Route::group(["middleware"=>"auth"],function(){
    Route::get("/itemmall",[ItemmallController::class,"index"]);
});

