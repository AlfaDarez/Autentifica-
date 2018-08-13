<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBibliotecaVideos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BibliotecaVideos', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',['corporativo','certificacion','publicidad'])->nullable();
            $table->string('Name',100);
            $table->string('Sumary',200);
            $table->string('url',200);
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
        Schema::dropIfExists('BibliotecaVideos');
    }
}
