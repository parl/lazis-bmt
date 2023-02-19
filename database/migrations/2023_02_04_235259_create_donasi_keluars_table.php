<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonasiKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donasi_keluar', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('donasiOutJenisId');
            $table->uuid('donasiOutAsnafId');
            $table->double('donasiOutNominal');
            $table->date('donasiOutTanggal');
            $table->string('donasiOutUserAdd');
            $table->string('donasiOutUserUpdate')->nullable();
            $table->timestamps();
            $table->foreign('donasiOutJenisId')->references('id')->on('ref_jenis_donasi')->onDelete('cascade');
            $table->foreign('donasiOutAsnafId')->references('id')->on('ref_asnaf')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donasi_keluars');
    }
}
