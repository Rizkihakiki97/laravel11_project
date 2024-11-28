<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TransOrderController;
use App\Models\Customer;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

//  '/'(slash): default route
//  method get, post, put, delete
// get : melihat
// post : mengirim data dari form (insert, updet)
// put : mengirim data dari form (updet)
//  delete : melihat data dari form (delete)
Route::get('/', [LoginController::class, 'index']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// grouping routing setelah login
Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('trans_order', TransOrderController::class);
});

Route::resource('service', ServiceController::class);
Route::resource('user', UsersController::class);


Route::get('latihan', [LatihanController::class, 'index']);
Route::get('edit/{id}', [LatihanController::class, 'edit'])->name('edit');
Route::get('hapus/{id}', [LatihanController::class, 'delete']);

Route::get('kalkulator', [KalkulatorController::class, 'index']);
Route::get('tambah', [KalkulatorController::class, 'tambah'])->name('tambah');
Route::get('kurang', [KalkulatorController::class, 'kurang'])->name('kurang');
Route::get('kali', [KalkulatorController::class, 'kali'])->name('kali');
Route::get('bagi', [KalkulatorController::class, 'bagi'])->name('bagi');

Route::post('strore-tambah', [KalkulatorController::class, 'storeTambah'])->name('store-tambah');
Route::post('store-kurang', [KalkulatorController::class, 'storeKurang'])->name('store-kurang');
Route::post('store-kali', [KalkulatorController::class, 'storeKali'])->name('store-kali');
Route::post('store-bagi', [KalkulatorController::class, 'storeBagi'])->name('store-bagi');

Route::get('delete/{id}', [UsersController::class, 'delete'])->name('delete');
