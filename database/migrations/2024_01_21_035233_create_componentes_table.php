<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('componentes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Marca');
            $table->string('Area');
            $table->string('NumeroSerie');
            $table->date('FechaAdquirido')->nullable();
            $table->date('AñoComponente')->nullable();
            $table->string('Prioridad');
            $table->string('Estado');
            $table->unsignedBigInteger('Equipo_id');
            $table->foreign('Equipo_id')->references('id')->on('equipos')->onDelete('cascade'); 
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
        Schema::dropIfExists('componentes');
    }
}
