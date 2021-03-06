<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsilatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formsilat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('ttl');
            $table->text('alamat');
            $table->string('phone');
            $table->string('email');
            $table->string('asal');
            $table->string('ns');
            $table->string('seminar');
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
        Schema::dropIfExists('formsilat');
    }
}
