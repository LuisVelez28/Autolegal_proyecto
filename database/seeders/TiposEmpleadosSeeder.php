<?php

namespace Database\Seeders;

use App\Models\Tipo_empleado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposEmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo_empleado= new Tipo_empleado();
        $tipo_empleado->nombre = "tipo-empleado-000";
        $tipo_empleado->descripcion = "descripcion tipo-empleado-000";
        $tipo_empleado->save();

        $tipo_empleado= new Tipo_empleado();
        $tipo_empleado->nombre = "tipo-empleado-001";
        $tipo_empleado->descripcion = "descripcion tipo-empleado-001";
        $tipo_empleado->save();

    }
}
