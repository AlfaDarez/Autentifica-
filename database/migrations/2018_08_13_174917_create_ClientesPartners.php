<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesPartners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ClientesPartner', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->references('id')->on('users');
            $table->string('name',200);
            $table->string('lastName',200);
            $table->string('telefono',10);
            $table->string('email',100);
            $table->string('infografico',250);
            $table->string('dieta',250);
            $table->string('informe',250);
            $table->string('CodigoCliente');
            $table->tinyInteger('status');



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
        Schema::dropIfExists('ClientesPartner');
    }
}
