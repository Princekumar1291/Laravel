<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function getUser()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users');
        $data = $response->json(); // ✅ decode JSON to array
        return view("user", ["users" => $data]); // ✅ pass array to view
    }
}
