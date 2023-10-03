<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PegawaiController;

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

// Route::get('/', function () {});
Route::resource('kecamatan', KecamatanController::class);
Route::resource('provinsi', ProvinsiController::class);
Route::resource('kelurahan', KelurahanController::class);
Route::resource('pegawai', PegawaiController::class);
