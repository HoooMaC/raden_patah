<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mrpberbagi_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mrpberbagi = DB::table('mrpberbagi')->get();
        return view('DashboardAdmin/mrpberbagi', compact('mrpberbagi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mrpberbagi = DB::table('mrpberbagi')->get();
        return view('DashboardAdmin/mrpberbagi', compact('mrpberbagi'));
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
        $request->file('gambar')->move(public_path('foto_mrpberbagi'), $filename);

    $data = [
        'nama_kegiatan' => $request->input('nama_kegiatan'),
        'keterangan' => $request->input('keterangan'),
        'gambar' => $filename,
    ];

    DB::table('mrpberbagi')->insert($data);

    return redirect('/Datamrpberbagi')->with('success', 'Data Kegiatan MRP Berbagi berhasil ditambahkan!');
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
    public function update(Request $request, $id_mrp_berbagi)
    {
        $request->validate([
            'nama_kegiatan' => 'required|max:255',
            'keterangan' => 'required',
            'gambar' => 'required|image',
        ]);

        $filename = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('foto_mrpberbagi'), $filename);

        $data = [
            'nama_kegiatan' => $request->input('nama_kegiatan'),
            'keterangan' => $request->input('keterangan'),
            'gambar' => $filename,
        ];

        DB::table('mrpberbagi')
        ->where('id_mrp_berbagi', $request->id_mrp_berbagi)
        ->update($data);
        return redirect('/Datamrpberbagi')->with('success', 'Data kegiatan MRP berbagi berhasil diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_mrp_berbagi)
    {
        DB::table('mrpberbagi')->where('id_mrp_berbagi', $id_mrp_berbagi)->delete();
        return redirect('/Datamrpberbagi')->with('success', 'Data kegiatan MRP berbagi harian berhasil dihapus !');
    }
}
