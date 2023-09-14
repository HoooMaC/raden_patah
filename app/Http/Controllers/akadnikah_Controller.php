<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class akadnikah_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akadnikah = DB::table('akadnikah')->get();
        return view('DashboardAdmin/dataakadnikah', compact('akadnikah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $akadnikah = DB::table('akadnikah')->get();
        return view('DashboardAdmin/dataakadnikah', compact('akadnikah'));
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

    DB::table('akadnikah')->insert($data);

    return redirect('/Dataakadnikah')->with('success', 'Data Akad Nikah berhasil ditambahkan!');
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
    public function update(Request $request, $id_akad_nikah)
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

        DB::table('akadnikah')
        ->where('id_akad_nikah', $request->id_akad_nikah)
        ->update($data);
        return redirect('/Dataakadnikah')->with('success', 'Data akad nikah berhasil diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_akad_nikah)
    {
        DB::table('akadnikah')->where('id_akad_nikah', $id_akad_nikah)->delete();
        return redirect('/Dataakadnikah')->with('success', 'Data akaf nikah berhasil dihapus !');
    }
}
