<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\VendorController;
use App\Http\Middleware\CheckForVendor;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::group(['prefix' => 'vendor'], function () {
        Route::get('/create', [VendorController::class, 'create'])->name('vendor.create');
        Route::post('/store', [VendorController::class, 'store'])->name('vendor.store');
        Route::get('/login', [AuthenticateController::class, 'loginV'])->name('vendor.login');
    });
});

Route::group(['middleware' => ['auth', CheckForVendor::class]], function () {
    Route::group(['prefix' => 'vendor'], function () {
        Route::get('dashboard', [VendorController::class, 'dashboard'])->name('vendor.dashboard');
        Route::get('logout', [AuthenticateController::class, 'logout'])->name('vendor.logout');
    });
});
