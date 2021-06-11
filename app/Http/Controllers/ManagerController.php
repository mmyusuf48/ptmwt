<?php

namespace App\Http\Controllers;

use App\manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manager = manager::all();
        return view('manager.index', compact('manager'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('manager.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $request)
    {
        $request->validate([
            'nama_manager' => 'required',
            'username' => 'required',
            'password' => 'required',
            'alamat_manager' => 'required',
            'no_tlp_manager' => 'required',
            'email_manager' => 'required',
            ]);

         $foto = $request->file('foto_manager');
         $file_name_foto = time().'.png';
         $path = base_path() . "/assets/manager/";

         $foto->move($path, $file_name_foto);
        
         DB::table('manager')->insert([
            'nama_manager' => $request->nama_manager,
            'username' => $request->username,
            'password' => $request->password,
            'alamat_manager' => $request->alamat_manager,
            'no_tlp_manager' => $request->no_tlp_manager,
            'email_manager' => $request->email_manager,
            'foto_manager' => 'assets/manager/' . $file_name_foto,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        // manager::create($request->all());
        return redirect ('/manager')->with('status','data berhasil dibuat !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manager = DB::table('manager')->where('id_manager', $id)->get()->first();

        return view('manager.show', compact('manager'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manager = DB::table('manager')->where('id_manager', $id)->get()->first();
        return view('manager.edit', compact('manager'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_manager' => 'required',
            'username' => 'required',
            'password' => 'required',
            'alamat_manager' => 'required',
            'no_tlp_manager' => 'required',
            'foto_manager' => 'required'
        ]);

        if($request ->file('foto_manager')){
            $foto = $request->file('foto_manager');
            $file_name_foto = time().'.png';
            $path = base_path() . "/assets/manager/";
            $foto->move($path, $file_name_foto);
            @unlink($path . str_replace("assets/manager/","", $request->old_img));
            $image = 'assets/manager/'. $file_name_foto;
        }else {
            $image = $request->old_img;
        }

        manager::where('id_manager', $id)
        ->update([
            'nama_manager' => $request->nama_manager,
            'username' => $request->username,
            'password' => $request->password,
            'alamat_manager' => $request->alamat_manager,
            'no_tlp_manager' => $request->no_tlp_manager,
            'email_manager' => $request->no_tlp_manager,
            'foto_manager' => $image
        ]);
        return redirect('/manager')->with('status','data berhasil di ubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        manager::destroy($id);
        return redirect ('/manager')->with('status','data berhasil di Hapus !');
    }
}
