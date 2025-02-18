<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\Api\TestApiController;
use PhpParser\Builder\Function_;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Add Api Rate Limit

// Route::middleware('throttle:2,1')->group(function () {};

Route::middleware('api.rate.limiter')->group(function () {

    Route::prefix('all_rides/')->group(function () {
        Route::get('/', [\App\Http\Controllers\Api\AllRideApiControler::class, 'index'])->name('index.Ride');
        Route::post('Creat-ride', [\App\Http\Controllers\Api\AllRideApiControler::class, 'StoreRide'])->name('Store.Ride');

        Route::post('Update-ride/{id}', [\App\Http\Controllers\Api\AllRideApiControler::class, 'UpdateRide'])->name('Update.Ride');

        Route::get('Delete-ride/{id}', [\App\Http\Controllers\Api\AllRideApiControler::class, 'DeleteRide'])->name('Delete.Ride');
    });
});
