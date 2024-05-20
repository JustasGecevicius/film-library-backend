<?php

use App\Http\Controllers\api\v1\MoviesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('movies', MoviesController::class);
});