<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class programmingguan_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmingguan = DB::table('programmingguan')->get();
        return view('DashboardAdmin/programmingguan', compact('programmingguan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programmingguan = DB::table('programmingguan')->get();
        return view('DashboardAdmin/programmingguan', compact('programmingguan'));
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
        'keterangan' => 'required',
        'gambar' => 'required|image',
    ]);

    $filename = $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move(public_path('foto_programmingguan'), $filename);

    $data = [
        'nama_program' => $request->input('nama_program'),
        'pelaksanaan' => $request->input('pelaksanaan'),
        'jumlah_hadir' => $request->input('jumlah_hadir'),
        'keterangan' => $request->input('keterangan'),
        'gambar' => $filename,
    ];

    DB::table('programmingguan')->insert($data);

    return redirect('/Dataprogrammingguan')->with('success', 'Data Program Mingguan berhasil ditambahkan!');
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
    public function update(Request $request, $id_program_mingguan)
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
            $request->file('gambar')->move(public_path('foto_programmingguan'), $filename);
        }



   //     $filename = $request->file('gambar')->getClientOriginalName();
   //     $request->file('gambar')->move(public_path('foto_programmingguan'), $filename);

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

        DB::table('programmingguan')
        ->where('id_program_mingguan', $request->id_program_mingguan)
        ->update($data);
        return redirect('/Dataprogrammingguan')->with('success', 'Data program mingguan berhasil diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_program_mingguan)
    {
        DB::table('programmingguan')->where('id_program_mingguan', $id_program_mingguan)->delete();
        return redirect('/Dataprogrammingguan')->with('success', 'Data program mingguan berhasil dihapus !');
    }
}

