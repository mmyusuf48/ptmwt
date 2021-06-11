<?php

namespace App\Http\Controllers;

// use App\konten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontenController extends Controller
{
    public function index( Request $request)
    {

        if($request->session()->has('nama')){
			echo $request->session()->get('id');
			echo $request->session()->get('nama');
			echo $request->session()->get('nomer');
			echo $request->session()->get('alamat');
			echo $request->session()->get('email');
			echo $request->session()->get('foto');
		}else{
			echo 'Tidak ada data dalam session.';
		}
        return view('konten.index' );
    }
}