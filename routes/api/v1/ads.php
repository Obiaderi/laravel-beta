<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apis\v1\AdsController;

Route::middleware([
    //    'auth:api',
])
    ->group(function () {
        Route::get('/ads', [AdsController::class, 'index']);

        Route::post('/ads', [AdsController::class, 'store']);

        Route::get('/ads/{slug}', [AdsController::class, 'show']);

        Route::post('/ads/{slug}', [AdsController::class, 'update']);

        Route::delete('/ads/{slug}', [AdsController::class, 'destroy']);
    });