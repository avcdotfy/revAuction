<?php

use App\Events\PlaygroundEvent;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PublicDataController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\VendorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
   return redirect()->route('vendor.login');
});

Route::get('/vendors/{cat_id}', [VendorController::class, 'getVendors'])->name('vendorsOf.category');
Route::get('/items/{cat_id}', [ItemController::class, 'getItems'])->name('itemsOf.category');

Route::get('/state', [PublicDataController::class, 'stateByCounryId'])->name('states.byCountry');

Route::get('/403', [PublicDataController::class, 'unauthorized'])->name('unauthorized');
Route::get('/404', [PublicDataController::class, 'notFound'])->name('404');

Route::group(['middleware' => 'auth'], function () {
   Route::get('/logout', [AuthenticateController::class, 'logout'])->name('logout');
   Route::get('/change-password', [AuthenticateController::class, 'changePassword'])->name('change.password');
   Route::post('/change-password', [AuthenticateController::class, 'doChangePassword'])->name('doChangePassword');
});

Route::group(['middleware' => 'guest'], function () {
   Route::get('/reset-password', [AuthenticateController::class, 'getResetLinkForm'])->name('reset-link');
   Route::post('/send-link', [AuthenticateController::class, 'sendResetLink'])->name('send-reset-link');
   Route::get('/reset-password/{token}', [AuthenticateController::class, 'resetPasswordForm'])->name('reset-password-form');
   Route::post('/reset-password', [AuthenticateController::class, 'resetPassword'])->name('reset-password');
   // Route::post('/change-password', [AuthenticateController::class, 'doChangePassword'])->name('doChangePassword');
});



Route::get('/get-routes', function (Request $r) {
   $routes = Route::getRoutes();
   return  json_encode($routes);
});

Route::fallback(function () {
   return redirect()->route('404');
});
