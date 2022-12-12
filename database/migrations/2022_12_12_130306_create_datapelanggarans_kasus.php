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
        Schema::create('datapelanggaran_kasus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('datapelanggaran_id')->unsigned();
            $table->bigInteger('kasus_id')->unsigned();
            

            $table->foreign('datapelanggaran_id')->references('id')->on('datapelanggarans')->onDelete('cascade');
            $table->foreign('kasus_id')->references('id')->on('kasus')->onDelete('cascade');
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
        Schema::dropIfExists('datapelanggarans_kasus');
    }
};
