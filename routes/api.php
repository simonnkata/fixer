<?php

use App\Http\Controllers\Api\V1\ArtisanController;
use App\Http\Controllers\Api\V1\FixjobController;
use App\Http\Controllers\Api\V1\BidController;
use App\Http\Controllers\Api\V1\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function () {
    Route::apiResource('artisans', ArtisanController::class);
    Route::apiResource('bids', BidController::class);
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('fixjobs', FixjobController::class);
});