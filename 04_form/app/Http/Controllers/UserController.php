<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //get form
    public function getUserForm(){
        return view("user-form");
    }
    //post form
    public function addUser(Request $request){      
        // echo "add User function called"."<br/>";
        // echo $request->username."<br/>";
        // echo $request->email."<br/>";
        // echo $request->city."<br/>";
        // echo implode(",",$request->hobbies)."<br/>";
        // echo $request->gender."<br/>";


        //validation
        $request->validate([
            "username" => "required | min:5",
            "email" => "required|email",
            "city" => "required",
            "hobbies" => "required",
            "gender" => "required"
        ],[
            "username.required" => "User required",  //error message
        ]);

        
        
        
        return $request;
    }
}
