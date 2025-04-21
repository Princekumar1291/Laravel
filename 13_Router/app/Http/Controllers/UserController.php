<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        return view("user");
    }
    function postUser(Request $request){
        return $request;
    }
    function putUser(Request $request){
        return "Called put";
        // return $request;
    }
    function deleteUser(Request $request){
        return "Called delete";
        // return $request;
    }
}
