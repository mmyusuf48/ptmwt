<?php

namespace App\Http\Controllers;

// use App\login;
Use Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(request $request, $id)
    {
        // echo"<pre>";
        // // echo $id;
        // print_r($request->all()); 
        // die();

        // // $manager = DB::table('manager')->where('username', $id)->where('password', $id)->get()->first();

        // // return view('index');
    }
}
