<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ramadhan_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gebyarramadhan = DB::table('gebyarramadhan')->get();
        return view('DashboardAdmin/gebyarramadhan', compact('gebyarramadhan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gebyarramadhan = DB::table('gebyarramadhan')->get();
        return view('DashboardAdmin/gebyarramadhan', compact('gebyarramadhan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'nama_kegiatan' => 'required|max:255',
        'keterangan' => 'required',
        'gambar' => 'required|image',
    ]);

    $filename = $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move(public_path('foto_gebyarramadhan'), $filename);

    $data = [
        'nama_kegiatan' => $request->input('nama_kegiatan'),
        'keterangan' => $request->input('keterangan'),
        'gambar' => $filename,
    ];

    DB::table('gebyarramadhan')->insert($data);

    return redirect('/Datagebyarramadhan')->with('success', 'Data Kegiatan Gebyar Ramadhan berhasil ditambahkan!');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_gebyar_ramadhan)
    {
        $request->validate([
            'nama_kegiatan' => 'required|max:255',
            'keterangan' => 'required',
            'gambar' => 'required|image',
        ]);

        $filename = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('foto_gebyarramadhan'), $filename);

        $data = [
            'nama_kegiatan' => $request->input('nama_kegiatan'),
            'keterangan' => $request->input('keterangan'),
            'gambar' => $filename,
        ];

        DB::table('gebyarramadhan')
        ->where('id_gebyar_ramadhan', $request->id_gebyar_ramadhan)
        ->update($data);
        return redirect('/Datagebyarramadhan')->with('success', 'Data kegiatan Gebyar Ramadhan berhasil diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_gebyar_ramadhan)
    {
        DB::table('gebyarramadhan')->where('id_gebyar_ramadhan', $id_gebyar_ramadhan)->delete();
        return redirect('/Datagebyarramadhan')->with('success', 'Data kegiatan Gebyar Ramadhan harian berhasil dihapus !');
    }
}
