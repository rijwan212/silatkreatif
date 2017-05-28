<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeminarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminar', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('place')->nullable();
          $table->string('speaker')->nullable();
          $table->text('content');
          $table->string('slug')->unique();
          $table->string('image')->nullable();
          $table->string('mime')->nullable();
          $table->string('original_filename')->nullable();
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
        Schema::dropIfExists('seminar');
    }
}
