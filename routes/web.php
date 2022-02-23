<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;
use App\Models\Transaksi;
use Illuminate\Auth\Events\Logout;

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

route::get('/', function() {
    return view('login.index');
});

// route untuk login
Route::resource('login', LoginController::class);

// route untuk logout
Route::get('/logout', [LoginController::class, 'logout']);

// halaman yang hanya bisa diakses setelah login
Route::middleware('islogin')->group(function() {
    // route untuk dashboard admin
    Route::get('/admin', function() {
        return view('admin.index');
    })->middleware('isadmin')->name('admin.index');
    // route untuk halaman user list
    Route::resource('admin/userList', UserController::class)->middleware('isadmin');

    
    // route untuk dashboard manager
    Route::get('/manager', function() {
        return view('manager.index');
    })->middleware('ismanager')->name('manager.index');
    // route untuk halaman menu
    Route::resource('manager/menu', MenuController::class)->middleware('ismanager');
    // route untuk halaman laporan
    Route::get('/manager/laporan', function() {
        return view('manager.laporan.index');
    })->middleware('ismanager');
    // route
    Route::get('/get-transaksi', [TransaksiController::class, 'filtering']); 



    // route untuk dashboard kasir
    Route::get('/kasir', function() {
        return view('kasir.index');
    })->middleware('iskasir')->name('kasir.index');
    // route untuk halaman transaksi
    Route::resource('kasir/transaksi', TransaksiController::class)->middleware('iskasir');
});
