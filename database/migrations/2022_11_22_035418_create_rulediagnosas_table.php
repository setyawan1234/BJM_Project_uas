<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRulediagnosasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rulediagnosas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penyakits_id');
            $table->foreign('penyakits_id')->references('id')->on('penyakits');
            $table->unsignedBigInteger('gejalas_id');
            $table->foreign('gejalas_id')->references('id')->on('gejalas');
            $table->unsignedBigInteger('indikatorbobots_id');
            $table->foreign('indikatorbobots_id')->references('id')->on('indikatorbobots');
            $table->ipAddress('kd_penyakit')->nullable();
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
        Schema::dropIfExists('rulediagnosas');
    }
}
