<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('data_pasien')->insert([
            'nama' => 'Khairul Umam Albi',
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

        DB::table('data_pasien')->insert([
            'nama' => 'Khairul Umam Albi',
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

        DB::table('data_pasien')->insert([
            'nama' => 'Khairul Umam Albi',
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

        DB::table('data_pasien')->insert([
            'nama' => ' Umam Albi',
            'jenis_kelamin' => 'L',
            'golongan_darah' => 'O',
            // 'id' => 1,
            'subjek' => 'test',
            'objek' => 'tes',
            'diagnosa' => 'tes',
            'terapi' => 'tidur',
            'NIK' => '2008107010071',
            'pemeriksa' => 'dr.umam',
            'tanggal' => '2022-02-01',
        ]);
    }
}
