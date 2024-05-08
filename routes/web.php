<?php

use App\Http\Controllers\Absensicontroller;
use App\Http\Controllers\Gajicontroller;
use App\Http\Controllers\Jabatancontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Pegawaicontroller;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\SuratPanggilcontroller;
use App\Http\Controllers\SuratUsulcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/404', function () {
    return view('404');
});

Route::resource('/pegawai', Pegawaicontroller::class);

Route::resource('/jabatan', Jabatancontroller::class);

Route::resource('/absensi', Absensicontroller::class);

Route::resource('/gaji', Gajicontroller::class);

Route::resource('/suratusul', SuratUsulcontroller::class);

Route::resource('/surat_panggil', SuratPanggilcontroller::class);

Route::resource('/riwayatJab', RiwayatController::class);

Route::get('/editpeg', function () {
    return view('pegawai.edit');
});

//backend
Route::resource('/pegawai-backend', Pegawaicontroller::class);

Route::resource('/absensi-backend', Absensicontroller::class);

Route::resource('/jabatan-backend', Jabatancontroller::class);

Route::resource('/gaji-backend', Gajicontroller::class);

Route::resource('/suratusul-backend', SuratUsulcontroller::class);

Route::resource('/suratpanggil-backend', SuratPanggilcontroller::class);

Route::resource('/riwayatJab-backend', RiwayatController::class);

//login
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/login', [LoginController::class, 'login'])->name('login'); 