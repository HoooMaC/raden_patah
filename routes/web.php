<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\adminController;
use App\Http\Controllers\programharian_Controller;
use App\Http\Controllers\programlainnya_controller;
use App\Http\Controllers\program_harian_Controller;
use App\Http\Controllers\programmingguan_Controller;
use App\Http\Controllers\programtriwulan_Controller;
use App\Http\Controllers\programinsidental_Controller;
use App\Http\Controllers\mrpberbagi_Controller;
use App\Http\Controllers\mualafcenter_Controller;
use App\Http\Controllers\konsultasikeagamaan_Controller;
use App\Http\Controllers\akadnikah_Controller;
use App\Http\Controllers\login_Controller;
use App\Http\Controllers\ramadhan_Controller;
use App\Http\Controllers\syiar_Controller;
use App\Http\Controllers\pengumuman_Controller;
use App\Http\Controllers\ArtikelController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [user_controller::class, 'home']);

Route::get('/program', [user_controller::class, 'program']);

Route::get('/progharian', [user_controller::class, 'progharian']);

Route::get('/progmingguan', [user_controller::class, 'progmingguan']);

Route::get('/proglainnya', [user_controller::class, 'proglainnya']);

Route::get('/event', [user_controller::class, 'event']);

Route::get('/unit', [user_controller::class, 'unit']);

Route::get('/layanan', [user_controller::class, 'layanan'])->name('pages.layanan');

Route::get('/mualafcenter', [user_controller::class, 'mualafcenter']);
Route::post('/mualafcenter', [user_Controller::class, 'addmualafcenter']);

Route::get('/pengumuman', [user_controller::class, 'pengumuman'])->name('pages.pengumuman');

Route::get('/akadnikah', [user_controller::class, 'akadnikah']);
Route::post('/akadnikah', [user_Controller::class, 'addakadnikah']);

Route::get('/konsultasikeagamaan', [user_controller::class, 'konsultasikeagamaan']);
Route::post('/konsultasikeagamaan', [user_Controller::class, 'addkonsultasikeagamaan']);

// TODO : FIXME
Route::get('/dashboard', [adminController::class, 'index']);

// program for Admin
Route::get('/programharian', [adminController::class, 'program_harian']);
Route::get('/programmingguan', [adminController::class, 'program_mingguan']);
Route::get('/programlainnya', [adminController::class, 'program_lainnya']);
Route::get('/programtriwulan', [adminController::class, 'program_triwulan']);
Route::get('/programinsidental', [adminController::class, 'program_insidental']);

Route::get('/tentang', [user_Controller::class, 'tentang']);

Route::get('/galerimrpberbagi', [user_Controller::class, 'galerimrpberbagi']);

Route::get('/galerigebyarramadhan', [user_Controller::class, 'galerigebyarramadhan']);

Route::get('/galerisyiardisabilitas', [user_Controller::class, 'galerisyiardisabilitas']);


Route::get('/admin', [user_Controller::class, 'admin'])->name('admin.dashboard');

Route::resource('/Dataprogramharian', programharian_Controller::class);
Route::get('/Dataprogramharian', [programharian_Controller::class, 'index']);
Route::put('/Dataprogramharian/update/{id_program_harian}', [programharian_Controller::class, 'update']);
Route::post('/Dataprogramharian/delete/{id_program_harian}', [programharian_Controller::class, 'destroy']);

Route::resource('/Dataprogrammingguan', programmingguan_Controller::class);
Route::get('/Dataprogrammingguan', [programmingguan_Controller::class, 'index']);
Route::post('/Dataprogrammingguan', [programmingguan_Controller::class, 'store']); // Menggunakan metode POST untuk menyimpan data
Route::put('/Dataprogrammingguan/update/{id_program_mingguan}', [programmingguan_Controller::class, 'update']);
Route::post('/Dataprogrammingguan/delete/{id_program_mingguan}', [programmingguan_Controller::class, 'destroy']);

Route::resource('/Dataprogramlainnya', programlainnya_Controller::class);
Route::get('/Dataprogramlainnya', [programlainnya_Controller::class, 'index']);
Route::put('/Dataprogramlainnya/update/{id_program_lainnya}', [programlainnya_Controller::class, 'update']);
Route::post('/Dataprogramlainnya/delete/{id_program_lainnya}', [programlainnya_Controller::class, 'destroy']);

Route::resource('/Dataprogramtriwulan', programtriwulan_Controller::class);
Route::get('/Dataprogramtriwulan', [programtriwulan_Controller::class, 'index']);
Route::post('/Dataprogramtriwulan', [programtriwulan_Controller::class, 'store']); // Menggunakan metode POST untuk menyimpan data
Route::put('/Dataprogramtriwulan/update/{id_program_triwulan}', [programtriwulan_Controller::class, 'update']);
Route::post('/Dataprogramtriwulan/delete/{id_program_triwulan}', [programtriwulan_Controller::class, 'destroy']);

Route::resource('/Dataprograminsidental', programinsidental_Controller::class);
Route::get('/Dataprograminsidental', [programinsidental_Controller::class, 'index']);
Route::post('/Dataprograminsidental', [programinsidental_Controller::class, 'store']); // Menggunakan metode POST untuk menyimpan data
Route::put('/Dataprograminsidental/update/{id_program_insidental}', [programinsidental_Controller::class, 'update']);
Route::post('/Dataprograminsidental/delete/{id_program_insidental}', [programinsidental_Controller::class, 'destroy']);

Route::resource('/Datamrpberbagi', mrpberbagi_Controller::class);
Route::get('/Datamrpberbagi', [mrpberbagi_Controller::class, 'index']);
Route::post('/Datamrpberbagi', [mrpberbagi_Controller::class, 'store']); // Menggunakan metode POST untuk menyimpan data
Route::put('/Datamrpberbagi/update/{id_mrp_berbagi}', [mrpberbagi_Controller::class, 'update']);
Route::post('/Datamrpberbagi/delete/{id_mrp_berbagi}', [mrpberbagi_Controller::class, 'destroy']);

Route::resource('/Datamualafcenter', mualafcenter_Controller::class);
Route::get('/Datamualafcenter', [mualafcenter_Controller::class, 'index']);
Route::post('/Datamualafcenter', [mualafcenter_Controller::class, 'store']); // Menggunakan metode POST untuk menyimpan data
Route::put('/Datamualafcenter/update/{id_mualaf_center}', [mualafcenter_Controller::class, 'update']);
Route::post('/Datamualafcenter/delete/{id_mualaf_center}', [mualafcenter_Controller::class, 'destroy']);

Route::resource('/Datakonsultasikeagamaan', konsultasikeagamaan_Controller::class);
Route::get('/Datakonsultasikeagamaan', [konsultasikeagamaan_Controller::class, 'index']);
Route::post('/Datakonsultasikeagamaan', [konsultasikeagamaan_Controller::class, 'store']); // Menggunakan metode POST untuk menyimpan data
Route::put('/Datakonsultasikeagamaan/update/{id_konsultasi_keagamaan}', [konsultasikeagamaan_Controller::class, 'update']);
Route::post('/Datakonsultasikeagamaan/delete/{id_konsultasi_keagamaan}', [konsultasikeagamaan_Controller::class, 'destroy']);

Route::resource('/Dataakadnikah', akadnikah_Controller::class);
Route::get('/Dataakadnikah', [akadnikah_Controller::class, 'index']);
Route::post('/Dataakadnikah', [akadnikah_Controller::class, 'store']); // Menggunakan metode POST untuk menyimpan data
Route::put('/Dataakadnikah/update/{id_akad_nikah}', [akadnikah_Controller::class, 'update']);
Route::post('/Dataakadnikah/delete/{id_akad_nikah}', [akadnikah_Controller::class, 'destroy']);

Route::resource('/Datagebyarramadhan', ramadhan_Controller::class);
Route::get('/Datagebyarramadhan', [ramadhan_Controller::class, 'index']);
Route::post('/Datagebyarramadhan', [ramadhan_Controller::class, 'store']); // Menggunakan metode POST untuk menyimpan data
Route::put('/Datagebyarramadhan/update/{id_gebyar_ramadhan}', [ramadhan_Controller::class, 'update']);
Route::post('/Datagebyarramadhan/delete/{id_gebyar_ramadhan}', [ramadhan_Controller::class, 'destroy']);

Route::resource('/Datasyiar', syiar_Controller::class);
Route::get('/Datasyiar', [syiar_Controller::class, 'index']);
Route::post('/Datasyiar', [syiar_Controller::class, 'store']); // Menggunakan metode POST untuk menyimpan data
Route::put('/Datasyiar/update/{id_syiar}', [syiar_Controller::class, 'update']);
Route::post('/Datasyiar/delete/{id_syiar}', [syiar_Controller::class, 'destroy']);

Route::resource('/pengumuman', pengumuman_Controller::class);
Route::get('/pengumuman', [pengumuman_Controller::class, 'index']);
Route::post('/pengumuman', [pengumuman_Controller::class, 'store']); // Menggunakan metode POST untuk menyimpan data
Route::put('/pengumuman/update/{id_pengumuman}', [pengumuman_Controller::class, 'update']);
Route::post('/pengumuman/delete/{id_pengumuman}', [pengumuman_Controller::class, 'destroy']);


// ARTIKEL
Route::resource('artikel', ArtikelController::class);






// LOGIN & LOGOUT START

Route::post('/login', 'Auth\login_Controller@login')->name('login')->middleware('auth');;
Route::get('/Dataprogramharian', 'programharian_Controller@index')->name('Dataprogramharian')->middleware('auth');
Route::get('/Dataprogramharian', 'programharian_Controller@index')->name('Dataprogramharian')->middleware('auth');

Route::get('/signin', [login_Controller::class, 'index']);
Route::post('/signin/login', [login_Controller::class, 'login']);
Route::post('/signin/logout', [login_Controller::class, 'logout']);

// LOGIN & LOGOUT END

Route::get('/Dataprogramharian', [programharian_Controller::class, 'index']);


// REGISTER START

Route::get('/register', [login_Controller::class, 'index1']);
Route::post('/signin/register', [login_Controller::class, 'register']);
Route::post('/signin/create', [login_Controller::class, 'create']);


// REGISTER END

// MIDDLEWARE START
Route::resource('Dataprogramharian', programharian_controller::class)->middleware('isLogin');
Route::resource('Dataprogrammingguan', programmingguan_controller::class)->middleware('isLogin');
Route::resource('Dataprogramtriwulan', programtriwulan_controller::class)->middleware('isLogin');
Route::resource('Dataprograminsidental', programinsidental_controller::class)->middleware('isLogin');
Route::resource('Dataprogramlainnya', programlainnya_controller::class)->middleware('isLogin');

Route::resource('Datamrpberbagi', mrpberbagi_Controller::class)->middleware('isLogin');
Route::resource('Datagebyarramadhan', ramadhan_Controller::class)->middleware('isLogin');
Route::resource('Datasyiar', syiar_Controller::class)->middleware('isLogin');

Route::resource('Datamualafcenter', mualafcenter_Controller::class)->middleware('isLogin');
Route::resource('Datakonsultasikeagamaan', konsultasikeagamaan_Controller::class)->middleware('isLogin');
Route::resource('Dataakadnikah', akadnikah_Controller::class)->middleware('isLogin');
// MIDDLEWARE END

















