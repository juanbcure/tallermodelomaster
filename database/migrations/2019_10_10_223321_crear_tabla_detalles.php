<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTabladetalles extends Migration
{
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('producto_id')->unsigned();
            $table->text('detalles');
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
        Schema::dropIfExists('detalles');
    }
}
