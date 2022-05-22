<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Logoutcontroller extends Controller
{
    /**
     * Sebuah Method Controller yang digunakan untuk melakukan proses logout
     */
    public function logout(Request $request){
        // Activate session_start
        session_start();
        // Unset session
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['NIK']);
        unset($_SESSION['role']);
        session_destroy();
        return redirect('/');
    }
}
