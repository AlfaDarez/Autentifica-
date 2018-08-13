<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivoPersonal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ArchivoPersonal', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('user_id')->unsigned()->references('id')->on('users');
             $table->string('titulo',150);
             $table->string('ubicacion',200);

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
        Schema::dropIfExists('ArchivoPersonal');
    }
}