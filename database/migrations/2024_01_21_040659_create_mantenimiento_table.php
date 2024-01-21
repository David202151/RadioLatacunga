<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMantenimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantenimiento', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Actividad');
            $table->text('Partes');
            $table->string('Frecuencia');
            $table->string('Prioridad');
            $table->string('Responsable');
            $table->string('Procedimiento');
            $table->integer('DiasParo');
            $table->unsignedBigInteger('Equipo_id');
            $table->foreign('Equipo_id')->references('id')->on('equipos')->onDelete('cascade'); 
            $table->string('Descripcion');
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
        Schema::dropIfExists('mantenimiento');
    }
}
