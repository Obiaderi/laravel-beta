<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apis\v1\AdsCategoryController;

Route::middleware([
    //    'auth:api',
])
    ->group(function () {
        Route::get('/ads-categories', [AdsCategoryController::class, 'index']);

        Route::get('/ads-categories/{adsCategory}', [AdsCategoryController::class, 'show'])
            ->whereNumber('adsCategory');

        Route::post('/ads-categories', [AdsCategoryController::class, 'store']);

        Route::post('/ads-categories/{adsCategory}', [AdsCategoryController::class, 'update'])
            ->whereNumber('adsCategory');

        Route::delete('/ads-categories/{adsCategory}', [AdsCategoryController::class, 'destroy']);
    });