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
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id-ruta')->constrained('rutas');
            $table->foreignId('id-conductor')->constrained('empleados');
            $table->foreignId('id-vehiculo')->constrained('vehiculos');
            $table->date('fecha_salida');
            $table->date('fecha_llegada');
            $table->integer('cupos_disponibles');
            $table->float('costo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
