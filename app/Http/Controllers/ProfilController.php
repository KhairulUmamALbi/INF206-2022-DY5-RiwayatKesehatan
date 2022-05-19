<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
<<<<<<< HEAD
=======
    // untuk menampilkan data profil
>>>>>>> 2008107010072_tes
    public function index()
    {
        $profil = Profil::all();
        return view('profil.index', compact(['profil']));
    }

<<<<<<< HEAD
=======
    // create table atau membuat table
>>>>>>> 2008107010072_tes
    public function create()
    {
        return view('profil.create');
    }

<<<<<<< HEAD
=======
    // untuk menyimpan data profil
>>>>>>> 2008107010072_tes
    public function store(Request $request)
    {

        Profil::create($request->except(['_token', 'submit']));
        return redirect('/profil');
    }

<<<<<<< HEAD
=======
    // untuk edit data profil
>>>>>>> 2008107010072_tes
    public function edit($id)
    {
        $profil = Profil::find($id);
        return view('profil.edit', compact(['profil']));
    }

<<<<<<< HEAD
=======
    // untuk update data profil
>>>>>>> 2008107010072_tes
    public function update($id, Request $request)
    {
        $profil = Profil::find($id);
        $profil->update($request->except(['_token', 'submit']));
        return redirect('/profil');
    }

<<<<<<< HEAD
=======
    // untuk menghapus data profil
>>>>>>> 2008107010072_tes
    public function destroy($id)
    {
        $profil = Profil::find($id);
        $profil->delete();
        return redirect('profil');
    }
}
