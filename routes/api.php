<?php

use App\Http\Controllers\api\v1\LikedMoviesController;
use App\Http\Controllers\api\v1\MoviesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
  Route::apiResource('movies', MoviesController::class);
    // Route::apiResource('likedMovies', LikedMoviesController::class);
});

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
