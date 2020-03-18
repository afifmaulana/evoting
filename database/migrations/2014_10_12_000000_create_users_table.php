<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_adminsekolah')->unsigned();
            $table->integer('nis')->unique();
            $table->string('nama_siswa', '30');
            $table->string('kelas', '10');
            $table->string('email', '30')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('api_token');
            $table->text('password');
            $table->rememberToken();
            $table->enum('status',['1','0']);
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
        Schema::dropIfExists('users');
    }
}
