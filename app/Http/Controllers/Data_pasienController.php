<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Data_pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Data_pasienController extends Controller
{
    // untuk menampilkan data pasien
    public function index()
    {
        session_start();
        $data_pasien = Data_pasien::all();
        return view('data_pasien.index', ['data_pasien' => $data_pasien]);
    }

    // create table atau membuat table
    public function create()
    {
        return view('data_pasien.create');
    }

    // untuk menyimpan data profil
    public function store(request $request)
    {
        //    dd($request->except(['_token','submit']));
        Data_pasien::create($request->except(['_token', 'submit']));
        return redirect('/data_pasien');
    }

    // untuk edit data profil
    public function edit($id)
    {
        $data_pasien = Data_pasien::find($id);
        return view('data_pasien.edit', compact(['data_pasien']));
    }


    // untuk update data profil
    public function update($id, Request $request)
    {
        $data_pasien = Data_pasien::find($id);
        $data_pasien->update($request->except(['_token', 'submit']));
        return redirect('/data_pasien');
    }

    // untuk menghapus data profil
    public function destroy($id)
    {
        $data_pasien = Data_pasien::find($id);
        $data_pasien->delete();
        return redirect('/data_pasien');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian

        $cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$data_pasien = DB::table('data_pasien')
		->where('nik','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		// return view('index',['pegawai' => $pegawai]);
        // return redirect('/data_pasien');

        return view('data_pasien.index', compact(['data_pasien']));
	}

    // public function search(Request $request)
    // {
    //     $keyword = $request->search;
    //     $data_pasien= data_pasien::where('NIK', 'like', "%" . $keyword . "%")->paginate(5);
    //     return view('users.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    // }
}
