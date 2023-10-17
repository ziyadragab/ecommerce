<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;


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

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'controller' => AuthController::class], function () {
    Route::get('/login', 'loginForm')->name('loginForm')->middleware('guest');
    Route::post('/login', 'login')->name('login')->middleware('guest');
    Route::delete('/logout', 'logout')->name('logout');
});


Route::group(
    [
        'as' => 'admin.',
        'prefix' => 'admin',
        'middleware' => 'Is_Admin',


    ],
    function () {
        Route::get('', [HomeController::class, 'index'])->name('index');
        Route::group(
            [
                'as' => 'category.',
                'prefix' => 'categories',
                'controller' => CategoryController::class
            ],
            function () {
                Route::get('', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('create', 'store')->name('store');
                Route::get('edit/{category}', 'edit')->name('edit');
                Route::put('update/{category}', 'update')->name('update');
                Route::delete('{category}', 'delete')->name('delete');
            }
        );
        Route::group(
            [
                'as' => 'product.',
                'prefix' => 'products',
                'controller' => productController::class
            ],
            function () {
                Route::get('', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('create', 'store')->name('store');
                Route::get('edit/{product}', 'edit')->name('edit');
                Route::put('update/{product}', 'update')->name('update');
                Route::delete('{product}', 'delete')->name('delete');
            }
        );

    }
);
