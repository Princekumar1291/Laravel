<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    // php artisan storage:link
    function upload(Request $request){
        $path=$request->file('myfile')->store('public');
        $filename=explode('/', $path)[1];
        return view('display',['path'=>$filename]);
    }
}
