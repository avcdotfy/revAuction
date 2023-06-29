<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'vendor'], function () {
    Route::group(['middleware' => 'auth'], function () {
    });
});
