<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    
    public function index(){
        return view('dashboard/index');
    }

    public function program_mingguan(){
        return view('dashboard/programmingguan');
    }

    public function program_triwulan(){
        return view('dashboard/programtriwulan');
    }

    public function program_insidental(){
        return view('dashboard/programinsidental');
    }
}
