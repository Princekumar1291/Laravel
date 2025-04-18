<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function queries(){
        $result=DB::table('users')->get();
        // $result=DB::table('users')->where("name", "prince")->get();
        // $result=[DB::table('users')->first()]; //obj added in array
        return view("user",["users"=>$result]);
    }
    public function addDataInDb(){
        //insert the data in the db
        $result=DB::table("users")->insert([
            "name"=>"prince",
            "email"=>"prince@.com",
            "password"=>"1234"
        ]);
        if($result){
            echo "data inserted";
        }
        else {
            echo "data not inserted";
        }
    }
    public function updateDataInDb(){
        //update the data in the db
        $result=DB::table("users")->where('name','prince')->update([
            "password"=>"4567444"
        ]);
        if($result){
            echo "data updated";
        }
        else {
            echo "data not updated";
        }
    }
    public function deleteDataInDb(){
        //update the data in the db
        $result=DB::table("users")->where('name','sam')->delete();
        if($result){
            echo "data deleted";
        }
        else {
            echo "data not deleted";
        }
    }

}
