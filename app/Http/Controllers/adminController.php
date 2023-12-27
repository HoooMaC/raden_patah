<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{

    public function index(){
        return view('Dashboard/index');
    }

    public function program_mingguan(){
        return view('DashboardAdmin/programmingguan');
    }

    public function program_lainnya(){
        return view('DashboardAdmin/programlainnya');
    }

    public function program_triwulan(){
        return view('DashboardAdmin/programtriwulan');
    }

    public function program_insidental(){
        return view('DashboardAdmin/programinsidental');
    }
}
