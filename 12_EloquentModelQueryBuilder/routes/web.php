<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});
Route::get("/index", [UserController::class,"index"]);
Route::get("/create", [UserController::class,"create"]);
Route::get("/update", [UserController::class,"update"]);
Route::get("/destroy", [UserController::class,"destroy"]);