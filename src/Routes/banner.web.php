<?php

use Illuminate\Support\Facades\Route;
use RazenModule\Banner\Controllers\Admin\BannerController;

/**
 * Group of routes for admin   
 */

// Route admin  banner
Route::prefix('admin')->group(function () {
    Route::group(['prefix' => 'banner', 'as' => 'admin.banner.'], function () {
        Route::resource('/', BannerController::class)
            ->parameters(['' => 'product'])
            ->names([
                'index' => 'index',
                'show' => 'show',
                'store' => 'store',
                'destroy' => 'destroy'
            ])->only([ 'index', 'show', 'store', 'show', 'destroy']);

        Route::post('{product}', [BannerController::class, 'update'])->name('update');
    });
});

