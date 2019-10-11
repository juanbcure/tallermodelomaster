<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVenta extends Migration
{
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('valor venta');
            $table->integer('empleado_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->foreign('empleado_id')
            ->references('id')
            ->on('provedor')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('producto_id')
            ->references('id')
            ->on('productos')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('venta');
    }
}
