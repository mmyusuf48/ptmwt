<?php

namespace App\Http\Controllers;

// Use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

        if ($user){
            $request->session()->put('id',$user->id_manager);
            $request->session()->put('nama',$user->nama_manager);
            $request->session()->put('alamat',$user->alamat_manager);
            $request->session()->put('nomer',$user->no_tlp_manager);
            $request->session()->put('email',$user->email_manager);
            $request->session()->put('foto',$user->foto_manager);
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


}
