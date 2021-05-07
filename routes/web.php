<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionDetailController;
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
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
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

    Route::group(['prefix' => '/item'], function (){
        Route::get('/', [ItemController::class, 'index'])->name('item_page');
        Route::get('/detail/{item}', [ItemController::class, 'detail'])->name('item_detail');
        Route::get('/datatable', [ItemController::class, 'datatables'])->name('item_datatable');
        Route::get('/create',[ItemController::class, 'create'])->name('item_create_page');
        Route::post('/save', [ItemController::class, 'save'])->name('item_save');
        Route::get('/edit/{item}',[ItemController::class, 'update'])->name('item_update');
        Route::put('/store/{item}', [ItemController::class, 'store'])->name('item_store');
        Route::get('/delete/{item}', [ItemController::class, 'delete'])->name('item_delete');
    });

    Route::group(['prefix' => '/stock'], function (){
        Route::get('/', [StockController::class, 'index'])->name('stock_page');
        Route::get('/detail/{stock}', [StockController::class, 'detail'])->name('stock_detail');
        Route::get('/datatable', [StockController::class, 'datatables'])->name('stock_datatable');
        Route::get('/create',[StockController::class, 'create'])->name('stock_create_page');
        Route::post('/save', [StockController::class, 'save'])->name('stock_save');
        Route::get('/edit/{stock}',[StockController::class, 'update'])->name('stock_update');
        Route::put('/store/{stock}', [StockController::class, 'store'])->name('stock_store');
        Route::get('/delete/{stock}', [StockController::class, 'delete'])->name('stock_delete');
    });

    Route::group(['prefix' => '/transaction'], function (){
        Route::get('/', [TransactionController::class, 'index'])->name('transaction_page');
        Route::get('/datatable', [TransactionController::class, 'datatables'])->name('transaction_datatable');
        Route::get('/create/{uuid}', [TransactionController::class, 'form'])->name('transaction_create_page');
        route::put('/store/{transaction}', [TransactionController::class, 'store'])->name('transaction_store');
        Route::get('/delete/{transaction}', [TransactionController::class, 'delete'])->name('transaction_delete');
    });

    Route::group(['prefix' => '/transaction-details'], function (){
        Route::get('/datatable/{uuid}', [TransactionDetailController::class, 'datatables'])->name('transaction_details_datatable');
        Route::post('/store/{transaction}', [TransactionDetailController::class, 'create'])->name('transaction_details_create');
        Route::get('/delete/{transactionDetail}', [TransactionDetailController::class, 'delete'])->name('transaction_details_delete');
    });
});

