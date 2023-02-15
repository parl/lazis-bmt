<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonasiMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donasi_masuk', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('donasiMuzakiId');
            $table->uuid('donasiJenisId');
            $table->double('donasiNominal');
            $table->date('donasiTanggal');
            $table->string('donasiUserAdd');
            $table->string('donasiUserUpdate')->nullable();
            $table->timestamps();
            $table->foreign('donasiMuzakiId')->references('id')->on('muzaki')->onDelete('cascade');
            $table->foreign('donasiJenisId')->references('id')->on('ref_jenis_donasi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donasi_masuks');
    }
}
