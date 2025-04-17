<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show(){
        return "List of the students";
    }
    function add(){
        return "List of the add";
    }
    function delete(){
        return "List of the delete";
    }
    function about($name){
        return "About $name";
    }
}
