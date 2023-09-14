<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class konsultasikeagamaan_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konsultasikeagamaan = DB::table('konsultasikeagamaan')->get();
        return view('DashboardAdmin/datakonsultasikeagamaan', compact('konsultasikeagamaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $konsultasikeagamaan = DB::table('konsultasikeagamaan')->get();
        return view('DashboardAdmin/datakonsultasikeagamaan', compact('konsultasikeagamaan'));
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
        'nama' => 'required|max:255',
        'alamat' => 'required|max:255', 
        'telpon' => 'required',
        'email' => 'required',

    ]);

    $data = [
        'nama' => $request->input('nama'),
        'alamat' => $request->input('alamat'),
        'telpon' => $request->input('telpon'),
        'email' => $request->input('email'),
    ];

    DB::table('konsultasikeagamaan')->insert($data);

    return redirect('/Datakonsultasikeagamaan')->with('success', 'Data Konsultasi Keagamaan berhasil ditambahkan!');
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
    public function update(Request $request, $id_konsultasi_keagamaan)
    {
        $request->validate([ 
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255', 
            'telpon' => 'required',
            'email' => 'required',
            
        ]);
    
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'telpon' => $request->input('telpon'),
            'email' => $request->input('email'),
            
        ];

        DB::table('konsultasikeagamaan')
        ->where('id_konsultasi_keagamaan', $request->id_konsultasi_keagamaan)
        ->update($data);
        return redirect('/Datakonsultasikeagamaan')->with('success', 'Data konsultasi keagamaan berhasil diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_konsultasi_keagamaan)
    {
        DB::table('konsultasikeagamaan')->where('id_konsultasi_keagamaan', $id_konsultasi_keagamaan)->delete();
        return redirect('/Datakonsultasikeagamaan')->with('success', 'Data konsultasi keagamaan berhasil dihapus !');
    }
}
