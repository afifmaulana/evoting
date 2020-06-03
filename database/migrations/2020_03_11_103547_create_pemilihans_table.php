<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemilihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemilihans', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('id_calon')->unsigned();
            $table->integer('id_adminsekolah')->unsigned();
//            $table->integer('total');
            $table->date('tanggal');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->string('tahun_ajaran');
            $table->timestamps();

            //$table->foreign('id_calon')->references('id')->on('calons')->onDelete('CASCADE');
            $table->foreign('id_adminsekolah')->references('id')->on('admin_sekolahs')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemilihans');
    }
}
