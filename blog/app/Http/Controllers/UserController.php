<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        return "hello user";
    }
    function aboutUser(){
        return "hello about user";
    }
    function getUserName($name=null){
        return "hello $name";
    }
}

