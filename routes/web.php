<?php

use App\Http\Controllers\EndUser\AuthController;
use App\Http\Controllers\EndUser\CartController;
use App\Http\Controllers\EndUser\ContactController;
use App\Http\Controllers\EndUser\FilterController;
use App\Http\Controllers\EndUser\HomeController;
use App\Http\Controllers\EndUser\OrderController;
use App\Http\Controllers\EndUser\RegisterController;
use App\Http\Controllers\EndUser\ShopController;
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
Route::group(
    [
        'as'=>'cart.',
        'controller'=> CartController::class
    ],
    function(){
        Route::get('addToCart','add')->name('add');
        Route::get('showCart','show')->name('show');
        Route::delete('{cart}','delete')->name('delete');


    }
);

Route::group(
    [
        'as'=>'order.',
        'controller'=> OrderController::class,
        'middleware'=>'auth'
    ],
    function(){
        Route::get('orders/create','create')->name('create');
        Route::post('orders/stor','store')->name('store');
        Route::get('admin/orders','index')->name('index')->middleware('Is_Admin');
        Route::get('admin/orders/{order}','changeStatus')->name('changeStatus')->middleware('Is_Admin');
        Route::delete('admin/orders/{order}','delete')->name('delete')->middleware('Is_Admin');



    }
);
Route::group(
    [
        'as'=>'shop.',
        'controller'=> ShopController::class,
    ],
    function(){
        Route::get('shop','show')->name('show');
        Route::get('showProductsWithFilterColor','filterByColor')->name('filterByColor');
        Route::get('showProductsWithFilterSize','filterBySize')->name('filterBySize');
    }
);

Route::group(
    [
        'as'=>'contact.',
        'controller' => ContactController::class,
    ],
    function(){
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('admin/contacts','index')->name('index')->middleware('Is_Admin');
        Route::delete('admin/contacts/{contact}','delete')->name('delete')->middleware('Is_Admin');

    }
);

