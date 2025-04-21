<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getLogin(){
        return view('login');
    }
    function getProfile(){
        return view('profile');
    }
    function postLogin(Request $request){
        session()->put('email', $request->email);
        session()->put("user",$request->input());

        //flash sesstion
        session()->flash('fEmail', $request->email);
        
        return redirect('/profile');
    }
    function postLogout(){
        session()->pull('email');
        return redirect('/profile');
    }
}
