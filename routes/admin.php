<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DecisionController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventModeController;
use App\Http\Controllers\HelpsupportController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginTrailController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ReportController;
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

        // Route::group(['middleware' => PermissionChecker::class], function () {

        Route::get('/', [AdminController::class, 'index'])->name('admin-dashboard');

        Route::group(['prefix' => 'company'], function () {
            Route::get('/create', [CompanyController::class, 'create'])->name('company.create');
            Route::post('/create', [CompanyController::class, 'store'])->name('company.store');
        });
        Route::group(['prefix' => 'department'], function () {
            Route::get('/', [DepartmentController::class, 'index'])->name('department.list');
            Route::get('/create', [DepartmentController::class, 'create'])->name('department.create');
            Route::post('/create', [DepartmentController::class, 'store'])->name('department.store');
            Route::get('/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
            Route::post('/update', [DepartmentController::class, 'update'])->name('department.update');
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
            Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
            Route::post('/update', [EmployeeController::class, 'update'])->name('employee.update');
        });


        Route::group(['prefix' => 'catalog'], function () {
            Route::group(['prefix' => 'category'], function () {
                Route::get('/', [CategoryController::class, 'index'])->name('category.list');
                Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
                Route::post('/create', [CategoryController::class, 'store'])->name('category.store');
                Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
                Route::post('/update', [CategoryController::class, 'update'])->name('category.update');
            });
            Route::group(['prefix' => 'item'], function () {
                Route::get('/', [ItemController::class, 'index'])->name('item.list');
                Route::get('/create', [ItemController::class, 'create'])->name('item.create');
                Route::post('/create', [ItemController::class, 'store'])->name('item.store');
                Route::get('/edit/{id}', [ItemController::class, 'edit'])->name('item.edit');
                Route::post('/update', [ItemController::class, 'update'])->name('item.update');
            });
        });

        Route::group(['prefix' => 'vendor'], function () {
            Route::get('/new-requests', [RequestController::class, 'new_requests'])->name('vendor.new_requests');
            Route::get('/approved-requests', [RequestController::class, 'approved'])->name('vendor.approved_requests');
            Route::get('/rejected-requests', [RequestController::class, 'rejected'])->name('vendor.rejected_requests');
            Route::get('/{id}/profile', [VendorController::class, 'profile'])->name('vendor.profile');
            Route::get('/update-to-all', [VendorController::class, 'updateToAll'])->name('vendor.updateToAll');
        });


        Route::group(['prefix' => 'setting'], function () {
            Route::group(['prefix' => 'master'], function () {
                Route::group(['prefix' => 'country'], function () {
                    Route::get('/', [CountryController::class, 'index'])->name('country.list');
                    Route::get('/create', [CountryController::class, 'create'])->name('country.create');
                    Route::post('/create', [CountryController::class, 'store'])->name('country.store');
                    Route::get('/edit/{id}', [CountryController::class, 'edit'])->name('country.edit');
                    Route::post('/update', [CountryController::class, 'update'])->name('country.update');
                });
                Route::group(['prefix' => 'state'], function () {
                    Route::get('/', [StateController::class, 'index'])->name('state.list');
                    Route::get('/create', [StateController::class, 'create'])->name('state.create');
                    Route::post('/create', [StateController::class, 'store'])->name('state.store');
                    Route::get('/edit/{id}', [StateController::class, 'edit'])->name('state.edit');
                    Route::post('/update', [StateController::class, 'update'])->name('state.update');
                });
                Route::group(['prefix' => 'region'], function () {
                    Route::get('/', [RegionController::class, 'index'])->name('region.list');
                    Route::get('/create', [RegionController::class, 'create'])->name('region.create');
                    Route::post('/create', [RegionController::class, 'store'])->name('region.store');
                    Route::get('/edit/{id}', [RegionController::class, 'edit'])->name('region.edit');
                    Route::post('/update', [RegionController::class, 'update'])->name('region.update');
                });
                Route::group(['prefix' => 'eventmode'], function () {
                    Route::get('/', [EventModeController::class, 'index'])->name('eventmode.list');
                    Route::get('/create', [EventModeController::class, 'create'])->name('eventmode.create');
                    Route::post('/create', [EventModeController::class, 'store'])->name('eventmode.store');
                    Route::get('/edit/{id}', [EventModeController::class, 'edit'])->name('eventmode.edit');
                    Route::post('/update', [EventModeController::class, 'update'])->name('eventmode.update');
                });
                Route::group(['prefix' => 'uom'], function () {
                    Route::get('/', [UOMController::class, 'index'])->name('uom.list');
                    Route::get('/create', [UOMController::class, 'create'])->name('uom.create');
                    Route::post('/create', [UOMController::class, 'store'])->name('uom.store');
                    Route::get('/edit/{id}', [UOMController::class, 'edit'])->name('uom.edit');
                    Route::post('/update', [UOMController::class, 'update'])->name('uom.update');
                });
            });

            Route::group(['prefix' => 'mail'], function () {
                Route::group(['prefix' => 'template'], function () {
                    Route::get('/', [TemplateController::class, 'emailTemplateList'])->name('template.email.list');
                    Route::get('create', [TemplateController::class, 'emailTemplate'])->name('template.email.create');
                    Route::post('create', [TemplateController::class, 'emailTemplateStore'])->name('template.email.store');
                    Route::get('/edit/{id}', [TemplateController::class, 'emailTemplateEdit'])->name('template.email.edit');
                    Route::post('/update', [TemplateController::class, 'emailTemplateUpdate'])->name('template.email.update');
                });

                Route::group(['prefix' => 'config'], function () {
                    Route::get('', [ConfigurationController::class, 'emailConfigurationList'])->name('config.mail.list');
                    Route::get('create', [ConfigurationController::class, 'emailConfiguration'])->name('config.mail.create');
                    Route::post('create', [ConfigurationController::class, 'emailConfigurationStore'])->name('config.mail.store');
                    Route::get('/edit/{id}', [ConfigurationController::class, 'emailConfigurationEdit'])->name('config.mail.edit');
                    Route::post('/update', [ConfigurationController::class, 'emailConfigurationUpdate'])->name('config.mail.update');
                });
            });
            Route::group(['prefix' => 'sms'], function () {
                Route::group(['prefix' => 'template'], function () {
                    Route::get('/', [TemplateController::class, 'smsTemplateList'])->name('template.sms.list');
                    Route::get('create', [TemplateController::class, 'smsTemplate'])->name('template.sms.create');
                    Route::post('create', [TemplateController::class, 'smsTemplateStore'])->name('template.sms.store');
                });
                Route::group(['prefix' => 'config'], function () {
                    Route::get('create', [ConfigurationController::class, 'smsConfiguration'])->name('config.sms.create');
                    Route::post('create', [ConfigurationController::class, 'smsConfigurationStore'])->name('config.sms.store');
                });
            });
        });

        Route::group(['prefix' => 'event'], function () {
            Route::get('', [EventController::class, 'index'])->name('event.list');
            Route::get('create', [EventController::class, 'create'])->name('event.create');
            Route::post('create', [EventController::class, 'store'])->name('event.store');
            Route::get('upcoming', [EventController::class, 'upcoming'])->name('event.upcoming');
            Route::get('running', [EventController::class, 'running'])->name('event.running');
            Route::get('decision-taken', [EventController::class, 'decisionTaken'])->name('event.decisionTaken');
            Route::get('closed', [EventController::class, 'closed'])->name('event.closed');
            Route::get('empty', [EventController::class, 'empty'])->name('event.empty');
            Route::get('view-posted-event-information/{eId}', [EventController::class, 'postedEventInformation'])->name('event.postedEventInformation');
            Route::get('view-decision-taken-status/{eId}', [EventController::class, 'decisionTakenEventStatus'])->name('event.decisionTakenEventStatus');
        });

        Route::group(['prefix' => 'decision'], function () {
            Route::get('take-decision/{eId}', [DecisionController::class, 'index'])->name('decision.take');
            Route::post('save-decision', [DecisionController::class, 'store'])->name('decision.store');
            // Route::get('create', [EventController::class, 'create'])->name('event.create');
        });


        Route::group(['prefix' => 'report'], function () {
            Route::get('running-event', [ReportController::class, 'runningEvent'])->name('report.runningEvent');
            Route::get('closed-event', [ReportController::class, 'closedEvent'])->name('report.closedEvent');
            Route::get('decision-taken', [ReportController::class, 'decisionTaken'])->name('report.decisionTaken');

            Route::get('closed-event-consolidate-report/{eId}', [ReportController::class, 'closedEventConsolidateReport'])->name('report.closedEventConsolidateReport');
            Route::get('closed-event-l1-report/{eId}', [ReportController::class, 'closedEvenL1Report'])->name('report.closedEvenL1Report');


            Route::get('decision-taken-event-consolidate-report/{eId}', [ReportController::class, 'decisionTakenEventConsolidateReport'])->name('report.decisionTakenEventConsolidateReport');
            Route::get('decision-taken-event-l1-report/{eId}', [ReportController::class, 'decisionTakenEvenL1Report'])->name('report.decisionTakenEvenL1Report');
        });

        Route::group(['prefix' => 'login-trails'], function () {
            Route::get('employee-login', [LoginTrailController::class, 'employeeLogin'])->name('login-trails.employeeLogin');
            Route::get('vendor-login', [LoginTrailController::class, 'vendorLogin'])->name('login-trails.vendorLogin');
        });

        Route::group(['prefix' => 'notice-news'], function () {
            Route::get('', [NoticeController::class, 'index'])->name('notice.list');
            Route::get('create', [NoticeController::class, 'create'])->name('notice.create');
            Route::post('store', [NoticeController::class, 'store'])->name('notice.store');
            Route::get('edit/{id}', [NoticeController::class, 'edit'])->name('notice.edit');
            Route::post('update', [NoticeController::class, 'update'])->name('notice.update');
        });
        Route::group(['prefix' => 'help-support'], function () {
            Route::get('create', [HelpsupportController::class, 'create'])->name('help.create');
            Route::post('create', [HelpsupportController::class, 'store'])->name('help.store');
        });

        // });

        Route::get('event-statistics/{eId}', [EventController::class, 'statistics'])->name('event.statistics');
    });
});

Route::get('live-bidder-status', [EventController::class, 'getLiveBiddersStatus'])->name('liveBidderStatus');
Route::get('item-details', [ItemController::class, 'getItemDetails'])->name('item.rpu-details');
