<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('npd');
            $table->string('nama');
            $table->string('ttl');
            $table->text('alamat');
            $table->string('Telephon');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('psb');
            $table->string('pst');
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
        Schema::dropIfExists('daftar');
    }
}
