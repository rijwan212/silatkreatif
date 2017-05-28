<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('npd');
            $table->string('name');
            $table->string('birth');
            $table->text('address');
            $table->string('phone');
            $table->string('gender');
            $table->string('religion');
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
        Schema::dropIfExists('registrar');
    }
}
