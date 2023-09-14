<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class syiar_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $syiar = DB::table('syiar')->get();
        return view('DashboardAdmin/syiar', compact('syiar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $syiar = DB::table('syiar')->get();
        return view('DashboardAdmin/syiar', compact('syiar'));
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
        'gambar' => 'required|image',
    ]);

    $filename = $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move(public_path('foto_syiar'), $filename);

    $data = [
        'gambar' => $filename,
    ];

    DB::table('syiar')->insert($data);

    return redirect('/Datasyiar')->with('success', 'Data Kegiatan Syiar Disabilitas berhasil ditambahkan!');
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
    public function update(Request $request, $id_syiar)
    {
        $request->validate([ 
            'gambar' => 'required|image',
        ]);

        $filename = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('foto_syiar'), $filename);
    
        $data = [
            'gambar' => $filename,
        ];

        DB::table('syiar')
        ->where('id_syiar', $request->id_syiar)
        ->update($data);
        return redirect('/Datasyiar')->with('success', 'Data kegiatan Syiar Disabilitas berhasil diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_syiar)
    {
        DB::table('syiar')->where('id_syiar', $id_syiar)->delete();
        return redirect('/Datasyiar')->with('success', 'Data kegiatan Syiar Disabilitas harian berhasil dihapus !');
    }
}
