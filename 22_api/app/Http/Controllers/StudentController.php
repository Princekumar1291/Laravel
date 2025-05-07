<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class StudentController extends Controller
{
    //
    function getStudents(){
        return view('student');
    }
    function addStudent(){
        return view('addStudent');
    }
    function postStudent(Request $request) {
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'age' => 'required|numeric'
        ],[
            'name.required' => 'Name is required', // Custom error message
            'email.required' => 'Email is required',
            'phone.required' => 'Phone is required',
            'age.required' => 'Age is required'
        ]);

        Cookie::queue('name', $request->input('name'), 60); //for 1 minute
    
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $age= $request->input('age');

        $result=DB::table('student')->insert([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'age' => $age
        ]);

        //email send
        $to=$email;
        $msg="Welcom to our website";
        $subject="New Student Details";
        Mail::to($to)->send(new WelcomeEmail($subject, $msg,$name));
        
        
        if($result){
            echo "Data Inserted";
        }
        else{
            echo "Data Not Inserted";
        }
        
        echo $name . " " . $email . " " . $phone . " " . $age;
    }

    function upload(){
        return view('uploadFile');
    }
    function postUpload(Request $request){
        // echo "upload functjion called";
        $file = $request->file('file')->store('public');
        return $file;
    }
    function studentApi(){
        $data=DB::table('student')->get();
        return $data;
    }
    
    
}
