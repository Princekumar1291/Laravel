<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", function (){
    return view("home");
});

Route::get("/about/{name}",function ($name){
    return view("about",["name"=>$name]);
});

// redirection 
route::redirect("/contact","/");



//paht of user controller
use App\Http\Controllers\UserController; 
Route::get("/user",[UserController::class,'getUser']);
Route::get("/aboutUser",[UserController::class,'aboutUser']);
Route::get("/getUserName/{name?}",[UserController::class,'getUserName']);
