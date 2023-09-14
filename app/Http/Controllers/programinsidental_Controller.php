<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class programinsidental_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programinsidental = DB::table('programinsidental')->get();
        return view('DashboardAdmin/programinsidental', compact('programinsidental'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programinsidental = DB::table('programinsidental')->get();
        return view('DashboardAdmin/programinsidental', compact('programinsidental'));
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
        'keterangan' => 'required|max:255', // Menambahkan aturan validasi untuk foto sebagai gambar
        'gambar' => 'required|image',
    ]);

    $filename = $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move(public_path('foto_programinsidental'), $filename);

    $data = [
        'nama_kegiatan' => $request->input('nama_kegiatan'),
        'keterangan' => $request->input('keterangan'),
        'gambar' => $filename,
    ];

    DB::table('programinsidental')->insert($data);

    return redirect('/Dataprograminsidental')->with('success', 'Data Program Insidental berhasil ditambahkan!');
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
    public function update(Request $request, $id_program_insidental)
    {
        $request->validate([ 
            'nama_kegiatan' => 'required|max:255',
            'keterangan' => 'required|max:255', // Menambahkan aturan validasi untuk foto sebagai gambar
            'gambar' => 'required|image',
        ]);

        $filename = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('foto_programinsidental'), $filename);
    
        $data = [
            'nama_kegiatan' => $request->input('nama_kegiatan'),
            'keterangan' => $request->input('keterangan'),
            'gambar' => $filename,
        ];

        DB::table('programinsidental')
        ->where('id_program_insidental', $request->id_program_insidental)
        ->update($data);
        return redirect('/Dataprograminsidental')->with('success', 'Data program Insidental berhasil diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_program_insidental)
    {
        DB::table('programinsidental')->where('id_program_insidental', $id_program_insidental)->delete();
        return redirect('/Dataprograminsidental')->with('success', 'Data program insidental berhasil dihapus !');
    }
}
