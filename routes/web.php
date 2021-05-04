<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
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

Route::group(['prefix' => '/'], function (){
    Route::get('/', function (){
        return redirect()->route('login_page');
    });
    Route::get('/login', [LoginController::class, 'index'])->name('login_page');
    Route::post('/auth', [LoginController::class, 'auth'])->name('login_auth');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard_page');

    Route::group(['prefix' => '/service'], function (){
        Route::get('/', [ServiceController::class, 'index'])->name('service_page');
        Route::get('/detail/{service}', [ServiceController::class, 'detail'])->name('service_detail');
        Route::get('/datatable', [ServiceController::class, 'datatables'])->name('service_datatable');
        Route::get('/create',[ServiceController::class, 'create'])->name('service_create_page');
        Route::post('/save', [ServiceController::class, 'save'])->name('service_save');
        Route::get('/edit/{service}',[ServiceController::class, 'update'])->name('service_update');
        Route::put('/store/{service}', [ServiceController::class, 'store'])->name('service_store');
        Route::get('/delete/{service}', [ServiceController::class, 'delete'])->name('service_delete');
    });

    Route::group(['prefix' => '/user'], function (){
        Route::get('/', [UserController::class, 'index'])->name('user_page');
        Route::get('/detail/{user}', [UserController::class, 'detail'])->name('user_detail');
        Route::get('/datatable', [UserController::class, 'datatables'])->name('user_datatable');
        Route::get('/create',[UserController::class, 'create'])->name('user_create_page');
        Route::post('/save', [UserController::class, 'save'])->name('user_save');
        Route::get('/edit/{user}',[UserController::class, 'update'])->name('user_update');
        Route::put('/store/{user}', [UserController::class, 'store'])->name('user_store');
        Route::get('/delete/{user}', [UserController::class, 'delete'])->name('user_delete');
    });
});

