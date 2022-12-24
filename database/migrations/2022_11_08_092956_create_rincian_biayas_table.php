<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRincianBiayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rincianbiaya', function (Blueprint $table) {
            $table->date('tanggal');
            $table->id();
            // $table->unsignedBigInteger('customer_id');
            // $table->foreign('customer_id')->references('id')->on('data_customers');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('service');
            $table->unsignedBigInteger('sparepart_id');
            $table->foreign('sparepart_id')->references('id')->on('data_spareparts');
            $table->integer('biaya')->nullable();
            $table->integer('biayaService')->nullable();
            $table->integer('hargaSparepart')->nullable();
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
        Schema::dropIfExists('rincianbiaya');
    }
}
