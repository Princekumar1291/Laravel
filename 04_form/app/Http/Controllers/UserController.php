<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getUserForm(){
        return view("user-form");
    }
    public function addUser(Request $request){
        echo "add User function called"."<br/>";
        echo $request->username."<br/>";
        echo $request->email."<br/>";
        echo $request->city."<br/>";
    }
}
