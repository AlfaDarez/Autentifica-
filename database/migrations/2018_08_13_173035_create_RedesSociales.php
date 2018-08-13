<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedesSociales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RedesSociales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->references('id')->on('users');
            $table->string('website');
            $table->string('facebook',200);
            $table->string('instagram',200);
            $table->string('youtube',200);
            $table->string('twitter',200);
            $table->string('snapchat',200);
            $table->string('tumblr',200);
            $table->string('otra_red',200);
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
        Schema::dropIfExists('RedesSociales');
    }
}
