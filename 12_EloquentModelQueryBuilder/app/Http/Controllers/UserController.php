<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $respnose=User::get();
        // $respnose=User::where('name','Prince')->get();
        // $respnose=[User::where('name','prince')->first()];
        // $respnose=[User::find(1)];
        return view("user",["users"=>$respnose]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $respnose=User::create([
            'name'=>"prince",
            "email"=>"4X4mM@example.com"
            ,"password"=>"123"
        ]);
        if($respnose){
            echo "data inserted";
        }
        else {
            echo "data not inserted";
        }
    }


    public function update()
    {
        //
        $respnose=User::where("id",1)->update([
            'name'=>"prince",
            "email"=>"4X4mM@example.com"
            ,"password"=>"123"
        ]);
        if($respnose){
            echo "data updated";
        }
        else {
            echo "data not updated";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
        $respnose=User::where("id",1)->delete();
        if($respnose){
            echo "data deleted";
        }
        else {
            echo "data not deleted";
        }
    }
}
