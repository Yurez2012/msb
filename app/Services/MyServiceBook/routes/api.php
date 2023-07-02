<?php

/*
|--------------------------------------------------------------------------
| Service - API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for this service.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Prefix: /api/my_service_book
use App\Services\MyServiceBook\Http\Controllers\Auth\LoginController;
use App\Services\MyServiceBook\Http\Controllers\Auth\RegisterController;
use App\Services\MyServiceBook\Http\Controllers\Car\CarController;
use App\Services\MyServiceBook\Http\Controllers\CarFind\CarFindController;
use App\Services\MyServiceBook\Http\Controllers\CarUser\CarUserController;

Route::group(['prefix' => 'my_service_book', 'middleware' => ['cors', 'json.response']], function() {
    Route::post('register', [RegisterController::class, 'store']);
    Route::post('login', [LoginController::class, 'store']);

    Route::middleware('auth:api')->group(function () {
        Route::group(['prefix' => 'car'], function() {
            Route::get('/', [CarController::class, 'index']);
            Route::get('/{car}', [CarController::class, 'show']);
            Route::resource('/{car}/user', CarUserController::class)->only(['store']);
            Route::resource('/find', CarFindController::class)->only(['show']);
        });
    });
});
