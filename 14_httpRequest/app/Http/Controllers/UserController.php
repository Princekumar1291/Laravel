<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getLogin(){
        return view('user');
    }
    function postLogin(Request $req){
        echo "request method is: ".$req->method();
        echo "<br/>";
        echo "request path is: ".$req->path();
        echo "<br/>";
        echo "request url is: ".$req->url();
        echo "<br/>";
        echo "email is: ".$req->email;
        echo "<br/>";
        echo "password is: ".$req->input('password');
        echo "<br/>";
        echo "Input fields are: ".print_r($req->input());
        echo "<br/>";
        echo "Ip is: ".($req->ip());
        echo "<br/>";

        if($req->isMethod("post")){
            echo "Excure of post request";
        }
        else{
            echo "Excure of other request";
        }
        if($req->isMethod("post")){
            echo "Excure of post request";
        }
        else{
            echo "Excure of other request";
        }
    }
}
