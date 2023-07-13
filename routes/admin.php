<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventModeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UOMController;
use App\Http\Controllers\VendorController;
use App\Http\Middleware\CheckForAdmin;
use App\Http\Middleware\PermissionChecker;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', [AuthenticateController::class, 'login'])->name('login');
        Route::post('login', [AuthenticateController::class, 'login_process'])->name('admin-login');
    });

    Route::group(['middleware' => ['auth', CheckForAdmin::class]], function () {

        Route::group(['prefix' => 'request'], function () {
            Route::get('/accept', [RequestController::class, 'accept'])->name('request.accept');
            Route::get('/reject', [RequestController::class, 'reject'])->name('request.reject');
        });

        Route::get('vendors', [VendorController::class, 'getVendorsFromCategoryId'])->name('event.vendors');
        Route::get('itemsRpu', [ItemController::class, 'getItemRPUsFromCategoryId'])->name('event.itemsRpu');

        Route::group(['middleware' => PermissionChecker::class], function () {

            Route::get('/', [AdminController::class, 'index'])->name('admin-dashboard');

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
                Route::get('/', [RolePermissionController::class, 'index'])->name('permission_role.list');
                Route::get('/create', [RolePermissionController::class, 'create'])->name('permission_role.create');
                Route::post('/create', [RolePermissionController::class, 'store'])->name('permission_role.store');
            });
            Route::group(['prefix' => 'employee'], function () {
                Route::get('/', [EmployeeController::class, 'index'])->name('employee.list');
                Route::get('/create', [EmployeeController::class, 'create'])->name('employee.create');
                Route::post('/create', [EmployeeController::class, 'store'])->name('employee.store');
            });


            Route::group(['prefix' => 'catalog'], function () {
                Route::group(['prefix' => 'category'], function () {
                    Route::get('/', [CategoryController::class, 'index'])->name('category.list');
                    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
                    Route::post('/create', [CategoryController::class, 'store'])->name('category.store');
                });
                Route::group(['prefix' => 'item'], function () {
                    Route::get('/', [ItemController::class, 'index'])->name('item.list');
                    Route::get('/create', [ItemController::class, 'create'])->name('item.create');
                    Route::post('/create', [ItemController::class, 'store'])->name('item.store');
                });
            });

            Route::group(['prefix' => 'vendor'], function () {
                Route::get('/new-requests', [RequestController::class, 'new_requests'])->name('vendor.new_requests');
                Route::get('/approved-requests', [RequestController::class, 'approved'])->name('vendor.approved_requests');
                Route::get('/rejected-requests', [RequestController::class, 'rejected'])->name('vendor.rejected_requests');
                Route::get('/{id}/profile', [VendorController::class, 'profile'])->name('vendor.profile');
            });


            Route::group(['prefix' => 'setting'], function () {
                Route::group(['prefix' => 'master'], function () {
                    Route::group(['prefix' => 'country'], function () {
                        Route::get('/', [CountryController::class, 'index'])->name('country.list');
                        Route::get('/create', [CountryController::class, 'create'])->name('country.create');
                        Route::post('/create', [CountryController::class, 'store'])->name('country.store');
                    });
                    Route::group(['prefix' => 'state'], function () {
                        Route::get('/', [StateController::class, 'index'])->name('state.list');
                        Route::get('/create', [StateController::class, 'create'])->name('state.create');
                        Route::post('/create', [StateController::class, 'store'])->name('state.store');
                    });
                    Route::group(['prefix' => 'region'], function () {
                        Route::get('/', [RegionController::class, 'index'])->name('region.list');
                        Route::get('/create', [RegionController::class, 'create'])->name('region.create');
                        Route::post('/create', [RegionController::class, 'store'])->name('region.store');
                    });
                    Route::group(['prefix' => 'eventmode'], function () {
                        Route::get('/', [EventModeController::class, 'index'])->name('eventmode.list');
                        Route::get('/create', [EventModeController::class, 'create'])->name('eventmode.create');
                        Route::post('/create', [EventModeController::class, 'store'])->name('eventmode.store');
                    });
                    Route::group(['prefix' => 'uom'], function () {
                        Route::get('/', [UOMController::class, 'index'])->name('uom.list');
                        Route::get('/create', [UOMController::class, 'create'])->name('uom.create');
                        Route::post('/create', [UOMController::class, 'store'])->name('uom.store');
                    });
                });

                Route::group(['prefix' => 'mail'], function () {
                    Route::group(['prefix' => 'template'], function () {
                        Route::get('create', [TemplateController::class, 'emailTemplate'])->name('template.email.create');
                        Route::post('create', [TemplateController::class, 'emailTemplateStore'])->name('template.email.store');
                    });
                });
            });

            Route::group(['prefix' => 'event'], function () {
                Route::get('', [EventController::class, 'index'])->name('event.list');
                Route::get('create', [EventController::class, 'create'])->name('event.create');
                Route::post('create', [EventController::class, 'store'])->name('event.store');
                Route::get('upcoming', [EventController::class, 'upcoming'])->name('event.upcoming');
                Route::get('running', [EventController::class, 'running'])->name('event.running');
                Route::get('closed', [EventController::class, 'closed'])->name('event.closed');
            });
        });

        Route::get('event-statistics/{eId}', [EventController::class, 'statistics'])->name('event.statistics');
    });
});
