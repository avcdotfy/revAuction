<?php

use App\Helpers\BidHelper;
use App\Helpers\UploadHelper;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\VendorController;
use App\Http\Middleware\CheckForVendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use Symfony\Contracts\Service\Attribute\Required;

Route::group(['middleware' => 'guest'], function () {
    Route::group(['prefix' => 'vendor'], function () {
        Route::get('/create', [VendorController::class, 'create'])->name('vendor.create');
        Route::post('/store', [VendorController::class, 'store'])->name('vendor.store');
        Route::get('/login', [AuthenticateController::class, 'loginV'])->name('vendor.login');
        Route::post('/login', [AuthenticateController::class, 'login_processV'])->name('vendor.login');
    });
});

Route::group(['middleware' => ['auth', CheckForVendor::class]], function () {
    Route::group(['prefix' => 'vendor'], function () {
        Route::get('dashboard', [VendorController::class, 'dashboard'])->name('vendor.dashboard');
        Route::get('upcomming-events', [VendorController::class, 'upCommingEvents'])->name('vendor.upcoming-events');
        Route::get('running-events', [VendorController::class, 'runningEvents'])->name('vendor.running-events');

        Route::get('participated-events', [ParticipantController::class, 'getParticipatedEvents'])->name('vendor.participated-events');
        Route::get('participated-events-status', [ParticipantController::class, 'getParticipatedEventsStatus'])->name('vendor.participated-events-status');
        Route::get('participated-event-item-list/{eid}', [ParticipantController::class, 'getParticipatedEventItemList'])->name('vendor.participated-event-item-list');
        Route::get('participated-event-item-status-list/{eid}', [ParticipantController::class, 'getParticipatedEventItemStatusList'])->name('vendor.participated-event-item-status-list');

        Route::get('posted-event-info/{eId}', [VendorController::class, 'postedEventInfo'])->name('vendor.posted-event-info');

        Route::get('participated-event-reports', [ParticipantController::class, 'participatedEventReports'])->name('vendor.participated-event-reports');
        Route::get('participated-event-reports/filter', [ParticipantController::class, 'filterParticipatedEventList'])->name('vendor.filter-participated-event-reports');


        Route::get('participated-event-status-reports', [ParticipantController::class, 'participatedEventStatusReports'])->name('vendor.participated-event-status-reports');

        Route::get('notice-news', [VendorController::class, 'noticeNews'])->name('vendor.notice-news');
        Route::get('view-notice-news/{id}', [VendorController::class, 'detailNews'])->name('vendor.details-News');

        Route::get('help-support', [VendorController::class, 'helpSupport'])->name('vendor.help-support');

        Route::group(['prefix' => 'auction'], function () {
            Route::get('live/{eventId}', [VendorController::class, 'liveAuction'])->name('vendor.liveAuction');
            Route::post('live-filter', [VendorController::class, 'liveAuctionFilterByRegion'])->name('vendor.filterLiveAuction');
            Route::post('submit-bid', [BidController::class, 'store'])->name('vendor.submit-bid');
            Route::post('live', [BidController::class, 'getLiveDataVendorSite'])->name('vendor.live-data');
        });
        Route::get('logout', [AuthenticateController::class, 'logout'])->name('vendor.logout');
    });
});
