<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengumuman1;
use Illuminate\Support\Facades\DB;

class pengumuman_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman1 = DB::table('pengumuman')->get();
        return view('DashboardAdmin/pengumuman', compact('pengumuman1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengumuman1 = DB::table('pengumuman')->get();
        return view('DashboardAdmin/pengumuman', compact('pengumuman'));
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
        'judul' => 'required|max:255', // Menambahkan aturan validasi untuk foto sebagai gambar
        'pemateri' => 'required',
        'pelaksanaan' => 'required',
        'tempat' => 'required',
    ]);

    $data = [
        'nama_kegiatan' => $request->input('nama_kegiatan'),
        'judul' => $request->input('judul'),
        'pemateri' => $request->input('pemateri'),
        'pelaksanaan' => $request->input('pelaksanaan'),
        'tempat' => $request->input('tempat'),
    ];

    DB::table('pengumuman')->insert($data);

    return redirect('/pengumuman')->with('success', 'Data pengumuman berhasil ditambahkan!');
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
    public function update(Request $request, $id_pengumuman)
    {
        $request->validate([
            'nama_kegiatan' => 'required|max:255',
            'judul' => 'required|max:255', // Menambahkan aturan validasi untuk foto sebagai gambar
            'pemateri' => 'required',
            'pelaksanaan' => 'required',
            'tempat' => 'required',
        ]);

        $data = [
            'nama_kegiatan' => $request->input('nama_kegiatan'),
            'judul' => $request->input('judul'),
            'pemateri' => $request->input('pemateri'),
            'pelaksanaan' => $request->input('pelaksanaan'),
            'tempat' => $request->input('tempat'),
        ];

        DB::table('pengumuman')
        ->where('id_pengumuman', $request->id_pengumuman)
        ->update($data);
        return redirect('/pengumuman')->with('success', 'Data pengumuman berhasil diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pengumuman)
    {
        DB::table('pengumuman')->where('id_pengumuman', $id_pengumuman)->delete();
        return redirect('/pengumuman')->with('success', 'Data pengumuman berhasil dihapus !');
    }
}
