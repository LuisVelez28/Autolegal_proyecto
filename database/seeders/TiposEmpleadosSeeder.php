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
        $tipo_empleado->nombre = "Administrador";
        $tipo_empleado->descripcion = "Creacion, visualizacion, actualizacion y borrado en todas las tablas que no sean automaticas";
        $tipo_empleado->save();

        $tipo_empleado= new Tipo_empleado();
        $tipo_empleado->nombre = "Conductor";
        $tipo_empleado->descripcion = "Empleado con rol de conductor";
        $tipo_empleado->save();

    }
}
