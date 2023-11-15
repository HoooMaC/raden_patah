<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mualafcenter_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mualafcenter = DB::table('mualafcenter')->get();
        return view('DashboardAdmin/datamualafcenter', compact('mualafcenter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mualafcenter = DB::table('mualafcenter')->get();
        return view('DashboardAdmin/datamualafcenter', compact('mualafcenter'));
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
        'telpon' => $request->input('no telpon'),
        'email' => $request->input('email'),

    ];

    DB::table('mualafcenter')->insert($data);

    return redirect('/Datamualafcenter')->with('success', 'Data Mualaf Center berhasil ditambahkan!');
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
    public function update(Request $request, $id_mualaf_center)
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

        DB::table('mualafcenter')
        ->where('id_mualaf_center', $request->id_mualaf_center)
        ->update($data);
        return redirect('/Datamualafcenter')->with('success', 'Data mualaf center berhasil diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_mualaf_center)
    {
        DB::table('mualafcenter')->where('id_mualaf_center', $id_mualaf_center)->delete();
        return redirect('/Datamualafcenter')->with('success', 'Data mualaf center berhasil dihapus !');
    }
}
