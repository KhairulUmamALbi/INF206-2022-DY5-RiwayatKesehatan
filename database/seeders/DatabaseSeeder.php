<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // DB::table('data_pasien')->insert([
        //     'nama' => 'Khairul Umam Albi',
        //     'jenis_kelamin' => 'L',
        //     'golongan_darah' => 'O',
        //     // 'id' => 1,
        //     'subjek' => 'test',
        //     'objek' => 'tes',
        //     'diagnosa' => 'tes',
        //     'terapi' => 'tidur',
        //     'NIK' => '2008107010072',
        //     'pemeriksa' => 'dr.umam',
        //     'tanggal' => '2022-02-01',
        // ]);

            // insert user dokter
        DB::table('users') ->insert([
            'name'=> 'Umam',
            'nama_lengkap'=>'Khairul Umam ALbi',
            'no_hp'=>'082282103998',
            'Alamat'=>'Jl.lingke',
            'golongan_darah'=>'O',
            'NIK'=>'2008107010072',
            'no_hp_wa_darurat'=>'08228210392',
            'email'=>'albikhairul212@gmail.com',
            'password'=> hash::make('123'),
            'role'=>true,
        ]);

        DB::table('users') ->insert([
            'name'=> 'mam',
            'nama_lengkap'=>' Umam ALbi',
            'no_hp'=>'082282103998',
            'Alamat'=>'Jl.lingke',
            'golongan_darah'=>'O',
            'NIK'=>'2008107010073',
            'no_hp_wa_darurat'=>'08228210392',
            'email'=>'albikhairul22@gmail.com',
            'password'=> hash::make('12'),

        ]);

        //end insert user dokter

        // insert user pasien


        //end insert pasien





        // insert data pasien
        DB::table('data_pasien')->insert([
            'name' => 'Khairul',
            'jenis_kelamin' => 'L',
            'golongan_darah' => 'O',
            // 'id' => 1,
            'subjek' => 'test',
            'objek' => 'tes',
            'diagnosa' => 'tes',
            'terapi' => 'tidur',
            'NIK' => '2008107010072',
            'pemeriksa' => 'dr.umam',
            'tanggal' => '2022-02-01',
        ]);



    }


}
