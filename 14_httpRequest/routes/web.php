<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[UserController::class,'getLogin']);
Route::post('/login',[UserController::class,'postLogin']);