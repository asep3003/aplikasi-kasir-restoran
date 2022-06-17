<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;

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

    // middleware group untuk role Admin
    Route::middleware('isadmin')->group(function(){
        // route untuk dashboard admin
        Route::get('/admin', function() {
            return view('admin.index');
        })->name('admin.index');
        // route untuk halaman user list
        Route::resource('admin/userList', UserController::class);
    });

    // middleware group untuk role Manager
    Route::middleware('ismanager')->group(function(){
        // route untuk dashboard manager
        Route::get('/manager', function() {
            return view('manager.index');
        })->name('manager.index');
        // route untuk halaman menu
        Route::resource('manager/menu', MenuController::class);
        // route untuk halaman laporan
        Route::get('/manager/laporan', function() {
            return view('manager.laporan.index');
        });
        // route untun mengambil selurh data transaksi yang dipakai di filtering
        Route::get('/get-transaksi', [TransaksiController::class, 'filtering']);
        // route untuk cetak pdf
        Route::get('/manager/laporan/cetak_pdf', [TransaksiController::class, 'cetak_pdf']);
    });

    // middleware group untuk role Kasir
    Route::middleware('iskasir')->group(function(){
        // route untuk dashboard kasir
        Route::get('/kasir', function() {
            return view('kasir.index');
        })->name('kasir.index');
        
        // route untuk halaman transaksi
        Route::resource('kasir/transaksi', TransaksiController::class);
        Route::get('/kasir/transaksi/struk/{id}', [TransaksiController::class, 'struk']);
    });
});
