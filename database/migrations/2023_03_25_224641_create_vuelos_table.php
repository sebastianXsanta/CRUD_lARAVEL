<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->char('cuidad_de_Partida');
            $table->char('cuidad_de_destino');
            $table->integer('Numero_de_pasajeros');
            $table->char('novedad_del_vuelo');
            $table->dateTime('hora_y_fecha_de_partida');
            $table->dateTime('hora_y_fecha_de_llegada');
            $table->timestamps();
            $table->unsignedBigInteger('Aerolineas_id');
            $table->foreign('Aerolineas_id')->references('id')->on('aerolineas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
