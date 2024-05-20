<?php

use App\Http\Controllers\api\v1\MoviesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//   return view('welcome');
// });

// Route::get('/zeba', function () {
//   return 'HERE';
// });

// Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\api\v1'], function () {
//   echo ('HELLOFOMRGE');
//   Route::apiResource('movies', MoviesController::class);
// });

Route::group(['prefix' => 'v1'], function () {
  Route::apiResource('movies', MoviesController::class);
});
