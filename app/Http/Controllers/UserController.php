<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Program;
use App\Models\Announcement;
use App\Models\ProgramCategory;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function home(){
        // TODO : Target
        $announcements = Announcement::orderBy('date', 'DESC')->limit(4)->get();

        return view ('user.home', compact('announcements'));
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

            // Simpan dalam array $all_program
            $all_program[$category->title] = [
                // simpan juga title dari category ke dalam array all program
                'category_title' => $category->title,
                'list' => $programs,
            ];

        }

        return view('user.program', compact('all_program'));
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

}
