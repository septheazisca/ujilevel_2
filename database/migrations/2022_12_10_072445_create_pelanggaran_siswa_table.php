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
        // Schema::create('pelanggaran_siswa', function (Blueprint $table) {
        //     $table->unsignedBigInteger('pelanggaran_id');
        //     $table->foreign('pelanggaran_id')->references('id')->on('pelanggarans')->onDelete('restrict');
        //     $table->unsignedBigInteger('siswa_id');
        //     $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('restrict');
        //     $table->unsignedBigInteger('guru_id');
        //     $table->foreign('guru_id')->references('id')->on('gurus')->onDelete('restrict');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggaran_siswa');
    }
};
