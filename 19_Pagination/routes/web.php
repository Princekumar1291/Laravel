<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});

Route::get("/users",[StudentController::class,'getUser']);
Route::post("/users",[StudentController::class,'postUser']);

Route::get('/displayStudent',[StudentController::class,'displayStudent']);

Route::get("/delete/{id}",[StudentController::class,'delete']);

Route::get("/edit/{id}",[StudentController::class,'edit']);
Route::put("/edit/{id}",[StudentController::class,'postEdit']);


Route::get("/search",[StudentController::class,'search']);