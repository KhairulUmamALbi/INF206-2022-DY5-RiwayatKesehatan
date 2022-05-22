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
            'password'=> hash::make('1'),
            'role'=>true,
        ]);

        DB::table('users') ->insert([
            'name'=> 'raja',
            'nama_lengkap'=>' Raja Furqan',
            'no_hp'=>'0822821032222',
            'Alamat'=>'Jl.lingke',
            'golongan_darah'=>'A',
            'NIK'=>'2008107010031',
            'no_hp_wa_darurat'=>'08228210392',
            'email'=>'RajaFurqan@gmail.com',
            'password'=> hash::make('12'),
            'role'=>true,
        ]);

        DB::table('users') ->insert([
            'name'=> 'rusyda',
            'nama_lengkap'=>' Rusyda Amalia',
            'no_hp'=>'0822821032222',
            'Alamat'=>'Jl.lingke',
            'golongan_darah'=>'A',
            'NIK'=>'2008107010021',
            'no_hp_wa_darurat'=>'08228210301',
            'email'=>'Rusyda@gmail.com',
            'password'=> hash::make('123'),
            'role'=>true,
        ]);

        DB::table('users') ->insert([
            'name'=> 'Rifqi',
            'nama_lengkap'=>' M.Rifqi Maulana',
            'no_hp'=>'0822821032222',
            'Alamat'=>'Jl.lingke',
            'golongan_darah'=>'B',
            'NIK'=>'2008107010091',
            'no_hp_wa_darurat'=>'08228210322',
            'email'=>'Rifqi@gmail.com',
            'password'=> hash::make('124'),
            'role'=>true,
        ]);

        DB::table('users') ->insert([
            'name'=> 'Suhail',
            'nama_lengkap'=>' M.Suhail',
            'no_hp'=>'0822821032222',
            'Alamat'=>'Jl.lingke',
            'golongan_darah'=>'A',
            'NIK'=>'200810701031',
            'no_hp_wa_darurat'=>'0822821032',
            'email'=>'Suhail@gmail.com',
            'password'=> hash::make('1234'),
            'role'=>true,
        ]);
        //end insert user dokter

        // insert user pasien

        DB::table('users') ->insert([
            'name'=> 'Abdul',
            'nama_lengkap'=>' Abdul Rofiq',
            'no_hp'=>'082282102',
            'Alamat'=>'Jl.lingke',
            'golongan_darah'=>'B',
            'NIK'=>'100810701031',
            'no_hp_wa_darurat'=>'082282132',
            'email'=>'Rofiq@gmail.com',
            'password'=> hash::make('1234'),
        ]);


        //end insert pasien





        // insert data pasien
        DB::table('data_pasien')->insert([
            'name' => 'Abdul',
            'jenis_kelamin' => 'L',
            'golongan_darah' => 'O',
            'subjek' => 'Sakit',
            'objek' => 'tes',
            'diagnosa' => 'tes',
            'terapi' => 'tidur',
            'NIK' => '20081070',
            'pemeriksa' => 'dr.Umam',
            'tanggal' => '2022-02-01',
        ]);



    }


}
