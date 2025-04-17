<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


// global middleware 
Route::get('/adults-only', function () {
    return 'Welcome, adult!';
})->middleware(['ageCheck', 'countryCheck']);

Route::get('/no-access', function () {
    return 'Access Denied. You must be 18 or older or You are not from India';
});

// http://127.0.0.1:8000/adults-only?age=23&country=India

