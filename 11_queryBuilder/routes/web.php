<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', [UserController::class, 'queries']);
Route::get('/addDataInDb', [UserController::class, 'addDataInDb']);
Route::get('/updateDataInDb', [UserController::class, 'updateDataInDb']);
Route::get('/deleteDataInDb', [UserController::class, 'deleteDataInDb']);
