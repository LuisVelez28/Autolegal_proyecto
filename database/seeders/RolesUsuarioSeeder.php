<?php

namespace Database\Seeders;

use App\Models\Rol_usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $rol_usuario= new Rol_usuario();
        $rol_usuario->nombre = "Admin";
        $rol_usuario->descripcion = "Control total de los registros de ls tablas";
        $rol_usuario->save();

        $rol_usuario= new Rol_usuario();
        $rol_usuario->nombre = "Cliente";
        $rol_usuario->descripcion = "Inscripcion a viajes disponibles y visualizacion de viajes realizados";
        $rol_usuario->save();

    }
}
