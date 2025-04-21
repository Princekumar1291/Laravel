<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);
// Route::view($uri, $callback);

Route::get('/user',[UserController::class,'getUser']);
Route::post('/user',[UserController::class,'postUser']);
Route::put('/user',[UserController::class,'putUser']);
Route::delete('/user',[UserController::class,'deleteUser']);