<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengumuman1;
use Illuminate\Support\Facades\DB;

class user_controller extends Controller
{
    public function index(){
        return view('index');
    }

    public function home(){
        $pengumuman1 = DB::table('pengumuman')->get();
        return view ('layout/home', compact('pengumuman1')) ;
    }

    public function tentang(){
        return view('layout/tentang');
    }

    public function admin(){
        return view('Dashboard/admin');
    }

    public function program () {
        $program_harian = DB::table('programharian')->get();
        $program_mingguan = DB::table('programmingguan')->get();
        $program_lainnya = DB::table('programlainnya')->get();
        $program_insidental = DB::table('programinsidental')->get();
        $program_triwulan = DB::table('programtriwulan')->get();
        return view ('layout/program', compact('program_harian', 'program_mingguan', 'program_lainnya', 'program_insidental', 'program_triwulan')) ;
    }

    public function progharian () {
        $program_harian = DB::table('programharian')->get();
        return view ('layout/programharianuser', compact('program_harian')) ;
    }

    public function progmingguan () {
        $program_mingguan = DB::table('programmingguan')->get();
        return view ('layout/programmingguanuser', compact('program_mingguan')) ;
    }

    public function proglainnya () {
        $program_lainnya = DB::table('programlainnya')->get();
        return view ('layout/programlainnyauser', compact('program_lainnya')) ;
    }
    
    public function event () {
        $mrpberbagi = DB::table('mrpberbagi')->get();
        $gebyarramadhan = DB::table('gebyarramadhan')->get();
        $syiar = DB::table('syiar')->get();
        return view ('layout/event', compact('mrpberbagi', 'gebyarramadhan', 'syiar')) ;
    }

    // public function pengumuman () {
    //     $pengumuman1 = DB::table('pengumuman')->get();
    //     return view ('layout/home', compact('pengumuman1')) ;
    // }


    public function unit () {
        return view ('layout/unit') ;
    }

    public function layanan () {
        return view ('layout/layanan') ;
    }

    public function galerimrpberbagi () {
        return view ('layout/galerimrpberbagi') ;
    }

    public function galerigebyarramadhan () {
        return view ('layout/galerigebyarramadhan') ;
    }

    public function galerisyiardisabilitas () {
        return view ('layout/galerisyiardisabilitas') ;
    }

    

    

    

    //MUALAF CENTER START

    public function mualafcenter () {
        return view ('layout/mualafcenter') ;
    }

    public function addmualafcenter(Request $request){
        $request-> validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255', 
            'telpon' => 'required',
            'email' => 'required',
            

        ]);

        DB::table('mualafcenter')->insert([
            'nama' => $request ['nama'],
            'alamat' => $request ['alamat'],
            'telpon' => $request ['telpon'],
            'email' => $request ['email'],
            
        ]);

        return redirect ('/mualafcenter')->with('success', 'Pendaftaran Berhasil');
    }

    // MUALAF CENTER END



    // KONSULTASI KEAGAMAAN START 

    public function konsultasikeagamaan () {
        return view ('layout/konsultasikeagamaan') ;
    }

    public function addkonsultasikeagamaan(Request $request){
        $request-> validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255', 
            'telpon' => 'required',
            'email' => 'required',

        ]);

        DB::table('konsultasikeagamaan')->insert([
            'nama' => $request ['nama'],
            'alamat' => $request ['alamat'],
            'telpon' => $request ['telpon'],
            'email' => $request ['email'],
        ]);

        return redirect ('/konsultasikeagamaan')->with('success', 'Pendaftaran Berhasil');
    }

    // KONSULTASI KEAGAMAAN END



    // AKAD NIKAH START
    
    public function akadnikah () {
        return view ('layout/akadnikah') ;
    }

    public function addakadnikah(Request $request){
        $request-> validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255', 
            'telpon' => 'required',
            'email' => 'required',
            

        ]);

        DB::table('akadnikah')->insert([
            'nama' => $request ['nama'],
            'alamat' => $request ['alamat'],
            'telpon' => $request ['telpon'],
            'email' => $request ['email'],
            
        ]);

        return redirect ('/akadnikah')->with('success', 'Pendaftaran Berhasil');
    }
}
