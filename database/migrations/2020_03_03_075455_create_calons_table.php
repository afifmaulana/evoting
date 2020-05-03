<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ketua')->unsigned()->unique();
            $table->integer('id_wakil')->unsigned()->unique();
            $table->text('visi');
            $table->text('misi');
            $table->text('foto');
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->foreign('id_ketua')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('id_wakil')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calons');
    }
}
