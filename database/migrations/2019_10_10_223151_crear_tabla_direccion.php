<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTabladireccion extends Migration
{
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ubicacion');
            $table->string('barrio');
            $table->string('ciudad');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')
            ->references('id')
            ->on('cliente')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('direccion');
    }
}
