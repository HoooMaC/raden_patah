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

Route::get('/test', [user_controller::class, 'test']);
Route::get('/home', [user_controller::class, 'home']);
Route::get('/program', [user_controller::class, 'program']);
Route::get('/event', [user_controller::class, 'event']);
Route::get('/unit', [user_controller::class, 'unit']);
Route::get('/layanan', [user_controller::class, 'layanan'])->name('pages.layanan');

// ?TEMPORARY inactive for now
// Route::get('/pengumuman', [user_controller::class, 'pengumuman'])->name('pages.pengumuman');

// TODO : FIXME
Route::get('/dashboard', [adminController::class, 'index']);
Route::get('/admin', [user_Controller::class, 'admin'])->name('admin.dashboard');

// TODO : add authentication depends on the role
// program for Admin
Route::get('/programharian', [adminController::class, 'program_harian']);
Route::get('/programmingguan', [adminController::class, 'program_mingguan']);
Route::get('/programlainnya', [adminController::class, 'program_lainnya']);
Route::get('/programtriwulan', [adminController::class, 'program_triwulan']);
Route::get('/programinsidental', [adminController::class, 'program_insidental']);

Route::resource('/pengumuman', pengumuman_Controller::class);
Route::get('/pengumuman', [pengumuman_Controller::class, 'index']);
Route::post('/pengumuman', [pengumuman_Controller::class, 'store']); // Menggunakan metode POST untuk menyimpan data
Route::put('/pengumuman/update/{id_pengumuman}', [pengumuman_Controller::class, 'update']);
Route::post('/pengumuman/delete/{id_pengumuman}', [pengumuman_Controller::class, 'destroy']);


// ARTIKEL
Route::resource('artikel', ArtikelController::class);

// LOGIN & LOGOUT START

Route::post('/login', 'Auth\login_Controller@login')->name('login')->middleware('auth');;

Route::get('/signin', [login_Controller::class, 'index']);
Route::post('/signin/login', [login_Controller::class, 'login']);
Route::post('/signin/logout', [login_Controller::class, 'logout']);

// REGISTER START

Route::get('/register', [login_Controller::class, 'index1']);
Route::post('/signin/register', [login_Controller::class, 'register']);
Route::post('/signin/create', [login_Controller::class, 'create']);
