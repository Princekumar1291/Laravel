<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});

//user 
Route::get("/users",[UserController::class,'users']);

//student
Route::get("/students",[StudentController::class,'getStudents']);
Route::get("/testmodel",[StudentController::class,'testm']);