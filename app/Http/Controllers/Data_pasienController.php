<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Data_pasien;
use Illuminate\Http\Request;

class Data_pasienController extends Controller
{
    public function index(){
        $data_pasien = Data_pasien::all();
        return view('data_pasien.index', compact(['data_pasien']));
    }

   public function create(){
       return view('data_pasien.create');
   } 

   public function store(request $request){
    //    dd($request->except(['_token','submit']));
       Data_pasien::create($request->except(['_token','submit']));
       return redirect('/data_pasien');
   }
}
