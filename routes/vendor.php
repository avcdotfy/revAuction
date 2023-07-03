<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::group(['prefix' => 'vendor'], function () {
        Route::get('/create', [VendorController::class, 'create'])->name('vendor.create');
        Route::post('/store', [VendorController::class, 'store'])->name('vendor.store');
        Route::get('/login', [VendorController::class, 'login'])->name('vendor.login');
        Route::post('/login', [VendorController::class, 'login_process'])->name('vendor.login');
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'vendor'], function () {
        Route::get('dashboard', [VendorController::class, 'dashboard'])->name('vendor.dashboard');
    });
});
