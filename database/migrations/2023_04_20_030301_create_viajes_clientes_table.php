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
        Schema::create('viajes_clientes', function (Blueprint $table) {
            $table->id();
            //create 2 foreing keys
            $table->foreignId('id-viaje')->constrained('viajes');
            $table->foreignId('id-cliente')->constrained('clientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes_clientes');
    }
};
