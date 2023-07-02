<?php

/*
|--------------------------------------------------------------------------
| Service - Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for this service.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'my_service_book'], function() {

    // The controllers live in src/Services/MyServiceBook/Http/Controllers
    // Route::get('/', 'UserController@index');

    Route::get('/', function() {
        echo '<pre>';
        echo print_r(1);
        echo '</pre>';
        die;
        return view('my_service_book::welcome');
    });

});
