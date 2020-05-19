<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasils', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_calon')->unsigned();
            $table->integer('id_adminsekolah')->unsigned();
            $table->integer('id_pemilihan')->unsigned();
            $table->integer('total');

            $table->timestamps();

            $table->foreign('id_calon')->references('id')->on('calons')->onDelete('CASCADE');
            $table->foreign('id_adminsekolah')->references('id')->on('admin_sekolahs')->onDelete('CASCADE');
            $table->foreign('id_pemilihan')->references('id')->on('pemilihans')->onDelete('CASCADE');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasils');
    }
}
