<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage. pokokna untuk registrasi jangan diubah2
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Menyimpan data pasiwen ke database
        DB::table('users')->insert([
            'nama_lengkap' => $request->nama_lengkap,
            'name' => $request->name,
            'NIK' => $request->NIK,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'Alamat' => $request->Alamat,
            'no_hp' => $request->no_hp,
            'no_hp_wa_darurat' => $request->no_hp_wa_darurat
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * proses login
     */

    public function login(Request $request)
    {
        // ini untuk login ya
        $hasil = DB::table('users')->where('name', $request->name)->count();
        $password = DB::table('users')->where('name', $request->name)->value('password');


        if ($hasil == 1) {
            if (Hash::check($request->password, $password)) {
                // Activate session_start
                session_start();
                // Set session
                $_SESSION['login'] = true;
                $_SESSION['name'] = $request->name;
                // id
                $_SESSION['id'] = DB::table('users')->where('name', $request->name)->value('id');
                $_SESSION['name'] = DB::table('users')->where('name', $request->name)->value('name');
                $_SESSION['email'] = DB::table('users')->where('name', $request->name)->value('email');
                // No NIK
                $_SESSION['NIK'] = DB::table('users')->where('name', $request->name)->value('NIK');
                $_SESSION['role'] = DB::table('users')->where('name', $request->name)->value('role');
                return redirect('/beranda');
            }
        } else {
            return redirect('/');
        }

    }
    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
