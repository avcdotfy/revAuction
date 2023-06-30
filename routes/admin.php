<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RolePermissionController;
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
            Route::get('/create', [CompanyController::class, 'create'])->name('company.create');
            Route::post('/create', [CompanyController::class, 'store'])->name('company.store');
        });
        Route::group(['prefix' => 'department'], function () {
            Route::get('/', [DepartmentController::class, 'index'])->name('department.list');
            Route::get('/create', [DepartmentController::class, 'create'])->name('department.create');
            Route::post('/create', [DepartmentController::class, 'store'])->name('department.store');
        });
        Route::group(['prefix' => 'permission'], function () {
            Route::get('/create', [RolePermissionController::class, 'create'])->name('permission_role.create');
            Route::post('/create', [RolePermissionController::class, 'store'])->name('permission_role.store');
        });
    });
});
