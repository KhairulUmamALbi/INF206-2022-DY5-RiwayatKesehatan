<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Data_pasienController;
use App\Http\Controllers\ProfilController;

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
    return view('login');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/lupapass', function () {
    return view('lupapass');
});

Route::get('/panduan', function () {
    return view('panduan');
});

Route::get('/beritakesehatan', function () {
    return view('beranda');
});

Route::get('/panduanlayanan', function () {
    return view('Panduanlayanan');
});

Route::get('/data_pasien',[Data_pasienController::class,'index']);
Route::get('/data_pasien/create',[Data_pasienController::class,'create']);
Route::post('/data_pasien/store',[Data_pasienController::class,'store']);
Route::get('/data_pasien/{id}/edit',[Data_pasienController::class,'edit']);
Route::put('/data_pasien/{id}',[Data_pasienController::class,'update']);
Route::delete('/data_pasien/{id}',[Data_pasienController::class,'destroy']);

// Route::get('/profil2',[ProfilController::class,'index']);

Route::get('/profil', [ProfilController::class,'index']);
Route::get('/profil/create', [ProfilController::class,'create']);
Route::post('/profil/store', [ProfilController::class,'store']);
Route::get('/profil/{id}/edit',[ProfilController::class,'edit']);
Route::put('/profil/{id}',[ProfilController::class,'update']);
Route::delete('/profil/{id}',[ProfilController::class,'destroy']);


