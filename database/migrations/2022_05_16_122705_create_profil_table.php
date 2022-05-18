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
            $table->string('gambar');
            $table->id();
            $table->text('nama');
            $table->text('NIK');
            $table->text('alamat');
            $table->text('No_Hp_Wa');
            $table->text('No_Hp_Wa_darurat');
            $table->enum('golongan_darah',['A','B','O','AB']);
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
