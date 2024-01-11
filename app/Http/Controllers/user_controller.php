<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Program;
use App\Models\pengumuman1;
use App\Models\ProgramCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class user_controller extends Controller
{
    public function index(){
        return view('index');
    }

    public function home(){
        // TODO : Target
        //$pengumuman = Pengumuman::incoming();

        // $pengumuman1 = DB::table('pengumuman')->get();
        // return view ('user.home', compact('pengumuman1'));

        return view ('user.home');
    }

    public function admin(){
        return view('Dashboard/admin');
    }

    public function program()  {
        $all_program = [];

        // Ambil semua kategori program
        $categories = ProgramCategory::all();

        // Iterasi melalui setiap kategori program
        foreach ($categories as $category) {
            // Ambil program-program terkait dengan kategori ini
            $programs = Program::getProgramsPerCategory($category->id);


            // simpan juga title dari category ke dalam array all program
            // Simpan dalam array $all_program
            $all_program[$category->title] = [
                'category_title' => $category->title,
                'programs' => $programs,
            ];
        }

        return view('user.program', ['all_program' => $all_program]);
    }

    // OLD
    // public function program () {
        // $program_harian = DB::table('programharian')->get();
        // $program_mingguan = DB::table('programmingguan')->get();
        // $program_triwulan = DB::table('programtriwulan')->get();
        // $program_insidental = DB::table('programinsidental')->get();
        // $program_lainnya = DB::table('programlainnya')->get();
        // return view ('User.program', compact('program_harian', 'program_mingguan', 'program_lainnya', 'program_insidental', 'program_triwulan')) ;
        // return view ('User.program');
    // }

    public function event () {
        $mrpberbagi = DB::table('mrpberbagi')->get();
        $gebyarramadhan = DB::table('gebyarramadhan')->get();
        $syiar = DB::table('syiar')->get();
        return view ('user.event', compact('mrpberbagi', 'gebyarramadhan', 'syiar')) ;
    }

    // public function pengumuman () {
    //     $pengumuman1 = DB::table('pengumuman')->get();
    //     return view ('layout/home', compact('pengumuman1')) ;
    // }


    public function unit () {
        return view ('user.unit') ;
    }

    public function layanan () {
        return view ('user.layanan') ;
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
