<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Master\MasterController;
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

// Route::get('/', function () {
//     return view('Dashboard.Home.index');
// });

Route::controller(AuthController::class)->group(function(){
    route::get('login','login')->name('login');
    route::post('Authentication','Authentication')->name('Authentication');
});

Route::controller(MasterController::class)->group(function(){
    route::get('/','Laporan_kerusakan')->middleware('role:User_Pegawai');
    route::get('/ResponLaporan','Respon_Kerusakan')->name('ResponLaporan');
    route::post('storeLaporanKerusakan','storeLaporanKerusakan')->name('storeLaporanKerusakan');
});