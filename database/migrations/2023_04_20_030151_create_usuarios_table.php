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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id-persona')->constrained('clientes');
            //$table->foreignId('id-persona')->constrained('empleados');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->boolean('estado');
            $table->foreignId('id-rol-usuario')->constrained('rol_usuarios');
            $table->timestamps();
        });
    }

    //ejecutar luego de la migracion
    // ALTER TABLE `usuario`
    // ADD CONSTRAINT `id-empleado-usuario` FOREIGN KEY (`id-persona`) REFERENCES `empleado` (`id`);


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
