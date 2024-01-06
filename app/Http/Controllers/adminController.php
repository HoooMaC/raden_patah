<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class adminController extends Controller
{
    public function index(){
        return view('Dashboard/admin');
    }

    public function program_harian(){
        $programHarian = DB::table('programharian')->get();
        return view('DashboardAdmin/programharian', compact('programHarian'));
    }

    public function program_mingguan(){
        $programMingguan = DB::table('programmingguan')->get();
        return view('DashboardAdmin/programmingguan', compact('programMingguan'));
    }

    public function program_lainnya(){
        $programLainnya = DB::table('programlainnya')->get();
        return view('DashboardAdmin/programlainnya', compact('programLainnya'));
    }

    public function program_triwulan(){
        $programTriwulan = DB::table('programtriwulan')->get();
        return view('DashboardAdmin/programtriwulan', compact('programTriwulan'));
    }

    public function program_insidental(){
        $programInsidental = DB::table('programinsidental')->get();
        return view('DashboardAdmin/programinsidental', compact('programInsidental'));
    }
}
