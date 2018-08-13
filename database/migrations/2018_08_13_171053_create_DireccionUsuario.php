<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DireccionUser', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('user_id')->unsigned()->references('id')->on('users');
            $table->string('calle');
            $table->string('colonia');
            $table->integer('num_int');
            $table->integer('num_ext');
            $table->string('municipio');
            $table->string('estado');
            

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
        Schema::dropIfExists('DireccionUser');
    }
}
