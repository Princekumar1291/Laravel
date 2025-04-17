<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", function (){
    return view("home");
});

Route::get("/about/{name?}", function($name = null){
    return view("about", ["name"=>$name]);
});

// Group routes
Route::prefix("/user")->group(function(){
    Route::get("/", function(){
        return view("user.index");
    });
    Route::get("/create", function(){
        return view("user.create");
    });
    Route::get("/edit", function(){
        return view("user.edit");
    });
    Route::get("/delete", function(){
        return view("user.delete");
    });
});