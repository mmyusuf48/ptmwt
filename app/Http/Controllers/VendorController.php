<?php

namespace App\Http\Controllers;

use App\vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor = vendor::all();
        return view('vendor.index', compact('vendor'));
        // return view('vendor.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.create');
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
            'nama_vendor' => 'required',
            'email' => 'required',
            'alamat_vendor' => 'required',
            'no_tlp_vendor' => 'required'
        ]);

        $foto = $request->file('foto_vendor');
        $file_name_foto = time() . '.png';
        $path = base_path() . "/assets/vendor/";

        $foto->move($path, $file_name_foto);

        DB::table('vendor')->insert([
            'nama_vendor' => $request->nama_vendor,
            'email' => $request->email,
            'alamat_vendor' => $request->alamat_vendor,
            'no_tlp_vendor' => $request->no_tlp_vendor,
            'foto_vendor' => 'assets/vendor/' . $file_name_foto,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('/vendor-proyek')->with('status', 'data berhasil dibuat !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor = DB::table('vendor')->where('id_vendor', $id)->get()->first();
        return view('vendor.show', compact('vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendor = DB::table('vendor')->where('id_vendor', $id)->get()->first();
        return view('vendor.edit', compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'nama_vendor' => 'required',
            'email' => 'required',
            'alamat_vendor' => 'required',
            'no_tlp_vendor' => 'required'
        ]);

        if ($request->file('foto_vendor')) {
            $foto = $request->file('foto_vendor');
            $file_name_foto = time() . '.png';
            $path = base_path() . "/assets/vendor/";
            $foto->move($path, $file_name_foto);
            @unlink($path . str_replace("assets/vendor/", "", $request->old_img));
            $image = 'assets/vendor/' . $file_name_foto;
        } else {
            $image = $request->old_img;
        }


        vendor::where('id_vendor', $id)
            ->update([
                'nama_vendor' => $request->nama_vendor,
                'email' => $request->email,
                'alamat_vendor' => $request->alamat_vendor,
                'no_tlp_vendor' => $request->no_tlp_vendor,
                'foto_vendor' => $image
            ]);
        return redirect('/vendor-proyek')->with('status', 'data berhasil di ubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        vendor::destroy($id);
        return redirect('/vendor-proyek')->with('status', 'data berhasil di Hapus !');
    }
}
