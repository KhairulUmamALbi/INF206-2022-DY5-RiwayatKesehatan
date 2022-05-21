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
    }
}
