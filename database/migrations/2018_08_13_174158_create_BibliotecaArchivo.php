<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBibliotecaArchivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BibliotecaArchivo', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',['cientifico','archivos'])->nullable();
            $table->string('titulo',250);
            $table->string('descripcion',350);
            $table->string('caratula',200);
            $table->string('ubicasion',200);
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
        Schema::dropIfExists('BibliotecaArchivo');
    }
}
