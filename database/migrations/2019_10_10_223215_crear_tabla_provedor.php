<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaprovedor extends Migration
{
    public function up()
    {
        Schema::create('provedor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')
            ->references('id')
            ->on('clientes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('provedor');
    }
}
