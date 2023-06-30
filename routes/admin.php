<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin-dashboard');
        Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    });

    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', [AdminController::class, 'login'])->name('login');
        Route::post('login', [AdminController::class, 'login_process'])->name('admin-login');
    });
});
