<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Data_pasienController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\Auth\LogoutController;
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
    session_start();
    return view('beranda');
});

Route::get('/lupapass', function () {
    return view('lupapass');
});

Route::get('/panduanlayanan', function () {
    return view('panduanlayanan');
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

// route cari
Route::get('/data_pasien/cari',[Data_pasienController::class,'cari']);

//Route search
// Route::get('/search', [UserController::class, 'search'])->NIK('search');


// Route::get('/profil2',[UserController::class,'index']);


Route::get('/profil', [UserController::class,'index']);
Route::get('/profil/create', [UserController::class,'create']);
Route::post('/profil/store', [AuthenticateController::class,'store']);
Route::get('/profil/{id}/edit',[UserController::class,'edit']);
Route::put('/profil/{id}',[UserController::class,'update']);
Route::delete('/profil/{id}',[UserController::class,'destroy']);


// Ke halaman setelah login
Route::post('/beranda', [AuthenticateController::class,'login']);
Route::get('/logout', [LogoutController::class, 'logout']);



