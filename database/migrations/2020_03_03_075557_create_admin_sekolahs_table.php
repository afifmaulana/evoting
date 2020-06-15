<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_sekolahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_admin');
            $table->string('nama_sekolah', '50');
            $table->string('kategori', '20');
            $table->text('alamat')->nullable();
            $table->text('nip')->nullable();
            $table->text('no_hp')->nullable();
            $table->text('no_izin')->nullable();
            $table->text('foto')->nullable();
            $table->string('email', '30')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('status')->default(false);
            $table->string('activation_token')->nullable();
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
        Schema::dropIfExists('admin_sekolahs');
    }
}
