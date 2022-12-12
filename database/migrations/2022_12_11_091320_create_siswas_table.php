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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('kelas', ['10', '11', '12']);
            $table->enum('jurusan', ['PPLG', 'TJKT', 'BRF', 'ANIMASI', 'TE']);
            $table->bigInteger('nis');
            $table->enum('jenis_kelamin', ['Laki - Laki', 'Perempuan']);
            $table->string('alamat');
            $table->bigInteger('notelepon');
            $table->string('email');
            $table->string('password');
            // $table->unsignedBigInteger('kelas_id');
            // $table->foreign('kelas_id')->references('id')->on('kelas');
            // $table->timestamps();
            $table->unsignedBigInteger('guru_id');
            $table->foreign('guru_id')->references('id')->on('gurus');
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
        Schema::dropIfExists('siswas');
    }
};
