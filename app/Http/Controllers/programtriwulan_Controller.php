<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class programtriwulan_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programtriwulan = DB::table('programtriwulan')->get();
        return view('DashboardAdmin/programtriwulan', compact('programtriwulan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programtriwulan = DB::table('programtriwulan')->get();
        return view('DashboardAdmin/programtriwulan', compact('programtriwulan'));
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
        $request->file('gambar')->move(public_path('foto_programtriwulan'), $filename);

    $data = [
        'nama_program' => $request->input('nama_program'),
        'pelaksanaan' => $request->input('pelaksanaan'),
        'jumlah_hadir' => $request->input('jumlah_hadir'),
        'keterangan' => $request->input('keterangan'),
        'gambar' => $filename,
    ];

    DB::table('programtriwulan')->insert($data);

    return redirect('/Dataprogramtriwulan')->with('success', 'Data Program Triwulan berhasil ditambahkan!');
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
    public function update(Request $request, $id_program_triwulan)
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
            $request->file('gambar')->move(public_path('foto_programtriwulan'), $filename);
        }



   //     $filename = $request->file('gambar')->getClientOriginalName();
   //     $request->file('gambar')->move(public_path('foto_programtriwulan'), $filename);
    
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

        DB::table('programtriwulan')
        ->where('id_program_triwulan', $request->id_program_triwulan)
        ->update($data);
        return redirect('/Dataprogramtriwulan')->with('success', 'Data program triwulan berhasil diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_program_triwulan)
    {
        DB::table('programtriwulan')->where('id_program_triwulan', $id_program_triwulan)->delete();
        return redirect('/Dataprogramtriwulan')->with('success', 'Data program triwulan berhasil dihapus !');
    }
}

