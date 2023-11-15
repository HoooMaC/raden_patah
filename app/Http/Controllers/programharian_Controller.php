<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class programharian_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programharian = DB::table('programharian')->get();
        return view('DashboardAdmin/programharian', compact('programharian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programharian = DB::table('programharian')->get();
        return view('DashboardAdmin/programharian', compact('programharian'));
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
        'nama_program' => 'required|max:255',
        'pelaksanaan' => 'required|max:255', // Menambahkan aturan validasi untuk foto sebagai gambar
        'jumlah_hadir' => 'required',
        'gambar' => 'required|image',
        'keterangan' => 'required',
    ]);

    $filename = $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move(public_path('foto_programharian'), $filename);

    $data = [
        'nama_program' => $request->input('nama_program'),
        'pelaksanaan' => $request->input('pelaksanaan'),
        'jumlah_hadir' => $request->input('jumlah_hadir'),
        'keterangan' => $request->input('keterangan'),
        'gambar' => $filename,
    ];

    DB::table('programharian')->insert($data);

    return redirect('/Dataprogramharian')->with('success', 'Data Program Harian berhasil ditambahkan!');
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
    public function update(Request $request, $id_program_harian)
    {
        $request->validate([
            'nama_program' => 'required|max:255',
            'pelaksanaan' => 'required|max:255', // Menambahkan aturan validasi untuk foto sebagai gambar
            'jumlah_hadir' => 'required',
            'keterangan' => 'required',
            'gambar' => 'nullable|image',
        ]);


        // cek apakah ada gambar baru yang dikirimkan
        if ($request->hasFile('gambar')) {
        // simpan gambar baru dengan nama yang unik
           $filename = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('foto_programharian'), $filename);
        }



   //     $filename = $request->file('gambar')->getClientOriginalName();
   //     $request->file('gambar')->move(public_path('foto_programharian'), $filename);

        $data = [
            'nama_program' => $request->input('nama_program'),
            'pelaksanaan' => $request->input('pelaksanaan'),
            'jumlah_hadir' => $request->input('jumlah_hadir'),
            'keterangan' => $request->input('keterangan'),
            'gambar' => 'nullable|image',
        ];

        // jika ada gambar baru, tambahkan ke data
        if (isset($filename)) {
            $data['gambar'] = $filename;
        }

        DB::table('programharian')
        ->where('id_program_harian', $request->id_program_harian)
        ->update($data);
        return redirect('/Dataprogramharian')->with('success', 'Data program harian berhasil diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_program_harian)
    {
        DB::table('programharian')->where('id_program_harian', $id_program_harian)->delete();
        return redirect('/Dataprogramharian')->with('success', 'Data program harian berhasil dihapus !');
    }
}

