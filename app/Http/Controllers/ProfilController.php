<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    // untuk menampilkan data profil
    public function index()
    {
        $profil = Profil::all();
        return view('profil.index', compact(['profil']));
    }

    // create table atau membuat table
    public function create()
    {
        return view('profil.create');
    }

    // untuk menyimpan data profil
    public function store(Request $request)
    {

        Profil::create($request->except(['_token', 'submit']));
        return redirect('/profil');
    }

    // untuk edit data profil
    public function edit($id)
    {
        $profil = Profil::find($id);
        return view('profil.edit', compact(['profil']));
    }

    // untuk update data profil
    public function update($id, Request $request)
    {
        $profil = Profil::find($id);
        $profil->update($request->except(['_token', 'submit']));
        return redirect('/profil');
    }

    // untuk menghapus data profil
    public function destroy($id)
    {
        $profil = Profil::find($id);
        $profil->delete();
        return redirect('profil');
    }
}
