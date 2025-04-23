<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function getUser(){
        return view("addStudent");
    }
    function postUser(Request $request){
        $student=new Student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->password=$request->password;
        $student->save();
        if($student){
            return redirect('/displayStudent');
        }
        else{
            echo "Data not inserted";
        }
    }
    function displayStudent(){
        $students=Student::all();
        return view("displayStudent",["students"=>$students]);
    }
    function delete($id){
        $student=Student::find($id);
        $student->delete();
        if($student){
            return redirect('/displayStudent');
        }  
        else {
            echo "Data not deleted";
        }   
    }
    function edit($id){
        $student=Student::find($id);
        return view("editStudent",["student"=>$student]);   
    }
    function postEdit(Request $request,$id){
        $student=Student::find($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->password=$request->password;
        $student->save();
        if($student){
            return redirect('/displayStudent');
        }   
        else {
            echo "Data not updated";
        }     
    }
    function search(Request $request){
        $name=$request->name;
        $students=Student::where('name','like',"%$name%")->get();
        return view("displayStudent",["students"=>$students,"name"=>$name]);
    }

    function deleteMultiple(Request $request){
        $ids=$request->ids;
        $result=Student::destroy($ids);
        if($result){
            return redirect('/displayStudent');
        }
        else{
            echo "Data not deleted";
        }        
    }    
}
