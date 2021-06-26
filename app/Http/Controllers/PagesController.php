<?php

namespace App\Http\Controllers;

// Use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function postlogin(request $request)
    {
        
        $user = DB::table('manager')
                ->where('username', $request->username)
                ->where('password', $request->password)
                ->get()->first();

        // echo "<pre>";
        //     print_r($user);die();

        if ($user){
            Session::put('id', $user->id_manager);
            Session::put('name', $user->nama_manager);
            Session::put('alamat', $user->alamat_manager);
            Session::put('nomer', $user->no_tlp_manager);
            Session::put('email', $user->email_manager);
            Session::put('foto', $user->foto_manager);
            // echo 'berhasil login';

            return redirect('/konten');
        }else{
            return redirect('/')->with('message','GAGAL LOGIIN  !');
        }
        
        // if(Auth::attempt($request->only('email','password'))){
        //     return redirect('/konten');
        // }
        // // dd($request->all());
        // // return redirect('/');
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }
}
