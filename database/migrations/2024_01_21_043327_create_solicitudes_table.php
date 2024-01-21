<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_mantenimiento', function (Blueprint $table) {
            $table->id();
            $table->date('FechaMantenimineto')->nullable();
            $table->time('HoraMantenimineto');
            $table->string('AreaMantenimineto');
            $table->string('MotivoMantenimineto');
            $table->string('ObservacionesMantenimineto');
            $table->integer('TiempoDuracion');
            $table->time('HoraSalida');
            $table->time('HoraRegreso');
            $table->string('EstadoSolicitud');
            $table->text('Parte');
            $table->unsignedBigInteger('Equipo_id');
            $table->foreign('Equipo_id')->references('id')->on('equipos')->onDelete('cascade'); 
            $table->unsignedBigInteger('Usuario_id');
            $table->foreign('Usuario_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->unsignedBigInteger('Mantenimiento_id');
            $table->foreign('Mantenimiento_id')->references('id')->on('mantenimiento')->onDelete('cascade'); 
            $table->unsignedBigInteger('Componente_id');
            $table->foreign('Componente_id')->references('id')->on('componentes')->onDelete('cascade'); 
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
        Schema::dropIfExists('solicitudes');
    }
}
