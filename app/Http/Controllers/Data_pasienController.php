<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Data_pasien;
use Illuminate\Http\Request;

class Data_pasienController extends Controller
{
<<<<<<< HEAD
=======
    // untuk menampilkan data pasien
>>>>>>> 2008107010072_tes
    public function index()
    {
        $data_pasien = Data_pasien::all();
        return view('data_pasien.index', compact(['data_pasien']));
    }

<<<<<<< HEAD
=======
    // create table atau membuat table
>>>>>>> 2008107010072_tes
    public function create()
    {
        return view('data_pasien.create');
    }

<<<<<<< HEAD
=======
    // untuk menyimpan data profil
>>>>>>> 2008107010072_tes
    public function store(request $request)
    {
        //    dd($request->except(['_token','submit']));
        Data_pasien::create($request->except(['_token', 'submit']));
        return redirect('/data_pasien');
    }

<<<<<<< HEAD
=======
    // untuk edit data profil
>>>>>>> 2008107010072_tes
    public function edit($id)
    {
        $data_pasien = Data_pasien::find($id);
        return view('data_pasien.edit', compact(['data_pasien']));
    }

<<<<<<< HEAD
=======

    // untuk update data profil
>>>>>>> 2008107010072_tes
    public function update($id, Request $request)
    {
        $data_pasien = Data_pasien::find($id);
        $data_pasien->update($request->except(['_token', 'submit']));
        return redirect('/data_pasien');
    }

<<<<<<< HEAD
=======
    // untuk menghapus data profil
>>>>>>> 2008107010072_tes
    public function destroy($id)
    {
        $data_pasien = Data_pasien::find($id);
        $data_pasien->delete();
        return redirect('/data_pasien');
    }
}
