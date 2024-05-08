<?php

use App\Http\Controllers\AbsensicontrollerApi;
use App\Http\Controllers\GajicontrollerApi;
use App\Http\Controllers\JabatancontrollerApi;
use App\Http\Controllers\PegawaiControllerApi;
use App\Http\Controllers\SuratPanggilcontrollerApi;
use App\Http\Controllers\SuratUsulcontrollerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('pegawai', PegawaiControllerApi::class);

Route::resource('/jabatan', JabatancontrollerApi::class);

Route::resource('/absensi', AbsensicontrollerApi::class);

Route::resource('/gaji', GajicontrollerApi::class);

Route::resource('surat_panggil', SuratPanggilcontrollerApi::class);

Route::resource('/suratusul', SuratUsulcontrollerApi::class);



