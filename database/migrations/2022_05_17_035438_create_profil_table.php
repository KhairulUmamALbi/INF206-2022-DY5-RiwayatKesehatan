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
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->text('nama_lengkap');
            $table->text('no_telepon');
            $table->text('alamat');
            $table->text('no_hp_wa');
            $table->enum('golongan_darah',['A','B','O','AB']);
            $table->text('NIK');
            $table->text('no_hp_wa_darurat');
            $table->text('email');
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
        Schema::dropIfExists('profil');
    }
};
