<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Procesador');
            $table->string('Marca');
            $table->string('TargetaGrafica');
            $table->string('Modelo');
            $table->string('Antivirus');
            $table->string('SO');
            $table->string('EspacioDisco');
            $table->string('MemoriaRAM');
            $table->string('Area');
            $table->boolean('Estado')->default(false);
            $table->date('FechaAdquirido')->nullable();
            $table->date('AñoEquipo')->nullable();
            $table->string('Prioridad');
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
        Schema::dropIfExists('equipos');
    }
}
