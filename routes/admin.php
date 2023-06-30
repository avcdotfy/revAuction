<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DepartmentController;
use App\Models\Department;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {


    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', [AdminController::class, 'login'])->name('login');
        Route::post('login', [AdminController::class, 'login_process'])->name('admin-login');
    });


    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin-dashboard');
        Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

        Route::group(['prefix' => 'company'], function () {
            Route::get('/create', [CompanyController::class, 'index'])->name('company.form');
            Route::post('/create', [CompanyController::class, 'store'])->name('company.store');
        });
        Route::group(['prefix' => 'department'], function () {
            Route::get('/create', [DepartmentController::class, 'index'])->name('department.form');
            Route::post('/create', [DepartmentController::class, 'store'])->name('department.store');
        });
    });
});
