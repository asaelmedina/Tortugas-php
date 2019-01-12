<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Nido', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_Tortuga');
          $table->string('Zona',50);
          $table->string('QR',100)->comment("URL del QR");
          $table->integer('id_Especie')->nullable(false)->unsigned();
          $table->foreign('id_Especie')->references('id')->on('Especie');
          $table->timestamps();

          //$table->unsignedInteger('user_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Nido');
    }
}
