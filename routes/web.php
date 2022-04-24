<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/riwayat', function () {
    return view('Riwayat');
});

Route::get('/riwayat/1/edit', function () {
    return view('edit');
});

Route::get('/riwayat/2/edit', function () {
    return view('edit');
});

Route::get('/riwayat/3/edit', function () {
    return view('edit');
});

Route::put('/riwayat/1', function () {
    return view('update');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
