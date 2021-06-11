<?php

namespace App\Http\Controllers;

use App\proyek;
use App\deskripsi;
use App\manager;
use App\vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyek = proyek::all();
        return view('proyek.index', compact('proyek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  echo "<pre>";
        // print_r($request->all());
        // die();
        for($i=0;$i<count($request->dataproyek);$i++){
            // echo $request -> dataproyek[$i];

            DB::table('deskripsi')->insert([
                'id_proyek' => $request -> id_proyek,
                'id_manager' => $request->id_manager,
                'id_vendor' => $request->id_vendor,
                'deskripsi' => $request -> dataproyek[$i],
                'status'=>'3',
                'image'=>'0',
                'keterangan'=>'0',
                'is_delete' => '0'
            ]);
        }
        return redirect('/proyek')->with('status', 'data berhasil dibuat !');
    }

    public function laporan(request $request, $id)
    {
        $proyek = DB::table('deskripsi')
        ->join('proyek','proyek.id_proyek', '=', 'deskripsi.id_proyek')
        ->join('manager','deskripsi.id_manager', '=', 'manager.id_manager')
        ->join('vendor','deskripsi.id_vendor', '=', 'vendor.id_vendor')
        ->get();
        // echo "<pre>";
        // print_r($proyek);
        // die();
        $proyek = DB::table('proyek')->where('id_proyek', $id)->get()->first();
        $deskripsi = DB::table('deskripsi')->where('id_proyek', $id)->get();
        $manager = DB::table('manager')->where('id_manager', $id)->get();
        $vendor = DB::table('vendor')->where('id_vendor', $id)->get();
        
        // dd($proyek, $deskripsi, $manager, $vendor);
        return view('proyek.laporan', compact('proyek','deskripsi','manager', 'vendor'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function show(request $request, $id)
    {
        $proyek = DB::table('deskripsi')
        ->join('proyek', 'proyek.id_proyek', '=', 'deskripsi.id_proyek')
        ->join('manager', 'deskripsi.id_manager', '=', 'manager.id_manager')
        ->join('vendor', 'deskripsi.id_vendor', '=', 'vendor.id_vendor')
        ->get();

        $proyek = DB::table('proyek')->where('id_proyek', $id)->get()->first();
        $deskripsi = DB::table('deskripsi')->where('id_proyek', $id)->get();
        $manager = DB::table('manager')->where('id_manager', $deskripsi[0]->id_manager)->get();
        $vendor = DB::table('vendor')->where('id_vendor', $deskripsi[0]->id_vendor)->get();
        
        return view('proyek.show', compact('proyek','deskripsi', 'manager', 'vendor'));
    }

    public function print(request $request, $id)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die();

        $proyek = DB::table('proyek')->where('id_proyek', $id)->get()->first();
        $deskripsi = DB::table('deskripsi')->where('id_proyek', $id)->get();
        $manager = DB::table('manager')->where('id_manager', $deskripsi[0]->id_manager)->get();
        $vendor = DB::table('vendor')->where('id_vendor', $deskripsi[0]->id_vendor)->get();

        // // dd( $proyek, $deskripsi);
        return view('proyek.print', compact('proyek','deskripsi', 'manager', 'vendor'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die();
        $request->validate([
            'nama_proyek' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_berakhir' => 'required',
        ]);

        DB::table('proyek')->insert([
            'nama_proyek' => $request->nama_proyek,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_berakhir' => $request->tanggal_berakhir,
            
            'created_at' => date('Y-m-d H:i:s')
        ]);

        // manager::create($request->all());
        return redirect('/proyek')->with('status', 'data berhasil dibuat !');
        
    }

    public function deskripsi($id)
    {
        $proyek = DB::table('proyek')->where('id_proyek', $id)->get()->first();
        $manager = manager::all();
        $vendor = vendor::all();

        // dd( $proyek, $manager, $vendor);
        return view('proyek.deskripsi', compact('proyek','manager','vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function edit(proyek $proyek, $id)
    {
        $deskripsi = DB::table('deskripsi')->where('id_deskripsi', $id)->get()->first();
        $proyek = DB::table('proyek')->where('id_proyek', $id)->get();
        $manager = DB::table('manager')->where('id_manager', $id)->get();
        $vendor = DB::table('vendor')->where('id_vendor', $id)->get();

        dd($proyek, $deskripsi, $manager, $vendor);
        // return view('proyek.edit', compact('proyek', 'deskripsi', 'manager', 'vendor'));
    }

    public function change(request $request, $id){

        // dd(request-all();
        // for ($i = 0; $i < count($request->dataproyek); $i++) {
        deskripsi::where('id_deskripsi', $id)
        ->update([
            'nama_proyek' => $request->nama_proyek,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_berakhir' => $request->tanggal_berakhir,

            'deskripsi' => $request->dataproyek,
            'is_delete' => '0'
        ]);
        // }
            dd($request->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        for ($i = 0; $i < count($request->id_deskripsi); $i++) {
            // echo "<pre>";
            //     print_r($request->file('image')[$i]);
            // echo "</pre>";
            if(isset($request->file('image')[$i])) {
                $foto = $request->file('image')[$i];
                $file_name_foto = time()+$i . '.png';
                $path = base_path() . "/assets/proyek/";
                $foto->move($path, $file_name_foto);
                @unlink($path . $request->old_image[$i]);
                $image[$i] = $file_name_foto;
            } else {
                $image[$i] = $request->old_image[$i];
            }
            // echo $image."<br />";
            deskripsi::where('id_deskripsi', $request->id_deskripsi[$i])->update([
                'status'        => $request->status[$i],
                'image'         => $image[$i],
                'keterangan'    => $request->keterangan[$i],
                'updated_at'    => Date('Y-m-d H:i:s'),
                'is_delete'     => '0'
            ]);
        }
        return redirect('/proyek')->with('status', 'data berhasil disave !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // echo $id;
        proyek::destroy($id);
        return redirect('/proyek')->with('status', 'data berhasil di Hapus !');
    }
}
