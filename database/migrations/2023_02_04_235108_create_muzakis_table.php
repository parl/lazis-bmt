<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuzakisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muzaki', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('muzakiNama');
            $table->string('muzakiNoHp');
            $table->string('muzakiNPWP');
            $table->string('muzakiUserAdd');
            $table->string('muzakiUserUpdate')->nullable();
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
        Schema::dropIfExists('muzakis');
    }
}
