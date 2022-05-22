<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pasien', function (Blueprint $table) {

            $table->id();
            $table->string('nama');
            $table->enum('jenis_kelamin',['L','P']);
            $table->enum('golongan_darah',['A','B','O','AB']);

            $table->string('subjek');
            $table->string('objek');
            $table->string('diagnosa');
            $table->text('terapi');
            $table->text('NIK');
            $table->string('pemeriksa');
            $table->string('password');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pasien');
    }
};
