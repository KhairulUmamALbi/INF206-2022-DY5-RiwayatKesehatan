<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::all();
        return view('profil.index', compact(['profil']));
    }

    public function create()
    {
        return view('profil.create');
    }

    public function store(Request $request)
    {

        Profil::create($request->except(['_token', 'submit']));
        return redirect('/profil');
    }

    public function edit($id)
    {
        $profil = Profil::find($id);
        return view('profil.edit', compact(['profil']));
    }

    public function update($id, Request $request)
    {
        $profil = Profil::find($id);
        $profil->update($request->except(['_token', 'submit']));
        return redirect('/profil');
    }

    public function destroy($id)
    {
        $profil = Profil::find($id);
        $profil->delete();
        return redirect('profil');
    }
}
