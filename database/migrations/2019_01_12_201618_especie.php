<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Especie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Especie', function (Blueprint $table) {
          $table->increments('id');
          $table->string('Dominio',50);
          $table->string('Reino',50);
          $table->string('Phylum',50);
          $table->string('Clase',50);
          $table->string('Orden',50);
          $table->string('Familia',50);
          $table->string('Genero',50);
          $table->string('Especie',50);
          $table->string('Imagen',100)->comment('URL de la imagen');
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
         Schema::drop('Especie');
    }
}
