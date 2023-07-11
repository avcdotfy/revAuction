<?php

use App\Helpers\CompanyHelper;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\VendorController;
use App\Http\Middleware\CheckForVendor;
use App\Models\EventVendor;
use App\Models\Request;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::group(['prefix' => 'vendor'], function () {
        Route::get('/create', [VendorController::class, 'create'])->name('vendor.create');
        Route::post('/store', [VendorController::class, 'store'])->name('vendor.store');
        Route::get('/login', [AuthenticateController::class, 'loginV'])->name('vendor.login');
        Route::post('/login', [AuthenticateController::class, 'login_processV'])->name('vendor.login');
    });
});

Route::get(
    '/vendor',
    function () {
        dd(Auth::user()->vendor->events);
    }
);
Route::group(['middleware' => ['auth', CheckForVendor::class]], function () {
    Route::group(['prefix' => 'vendor'], function () {

        Route::get('dashboard', [VendorController::class, 'dashboard'])->name('vendor.dashboard');
        Route::get('upcomming-events', [VendorController::class, 'upCommingEvents'])->name('vendor.upcoming-events');
        Route::get('running-events', [VendorController::class, 'runningEvents'])->name('vendor.running-events');
        Route::get('participated-events', [VendorController::class, 'participatedEvents'])->name('vendor.participated-events');
        Route::get('participated-events-status', [VendorController::class, 'participatedEventsStatus'])->name('vendor.participated-events-status');

        Route::get('participated-event-item-list', [VendorController::class, 'participatedEventItemList'])->name('vendor.participated-event-item-list');
        Route::get('posted-event-info', [VendorController::class, 'postedEventInfo'])->name('vendor.posted-event-info');

        Route::get('participated-event-reports', [VendorController::class, 'participatedEventReports'])->name('vendor.participated-event-reports');
        Route::get('participated-event-status-reports', [VendorController::class, 'participatedEventStatusReports'])->name('vendor.participated-event-status-reports');


        Route::get('notice-news', [VendorController::class, 'noticeNews'])->name('vendor.notice-news');
        Route::get('view-notice-news', [VendorController::class, 'detailNews'])->name('vendor.details-News');

        Route::get('help-support', [VendorController::class, 'helpSupport'])->name('vendor.help-support');


        Route::group(['prefix' => 'auction'], function () {
            Route::get('live', [VendorController::class, 'liveAuction'])->name('vendor.liveAuction');
        });


        Route::get('logout', [AuthenticateController::class, 'logout'])->name('vendor.logout');
    });
});
