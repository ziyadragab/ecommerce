<?php

use App\Http\Controllers\EndUser\AuthController;
use App\Http\Controllers\EndUser\HomeController;
use App\Http\Controllers\EndUser\RegisterController;
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



Route::group(
    [

        'as' => 'endUser.',
    ],
    function () {
        Route::get('', [HomeController::class, 'index'])->name('index');

        Route::get("register", [RegisterController::class, 'registerForm'])->name("registerForm")->middleware('guest');
        Route::post("register", [RegisterController::class, 'register'])->name("register")->middleware('guest');
        Route::get("login", [AuthController::class, 'loginForm'])->name("loginForm")->middleware('guest');
        Route::post("login", [AuthController::class, 'login'])->name("login")->middleware('guest');
        Route::delete("logout",[AuthController::class,'logout'])->name('logout')->middleware('auth');
    }
);
