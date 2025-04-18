<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function getStudents(){
        $students=\App\Models\Student::all();
        return view("students",["students"=>$students]);
    }
    function testm(){
        $data=new \App\Models\Student;
        return $data->testMod();
    }
}
