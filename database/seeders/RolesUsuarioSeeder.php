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
        $rol_usuario->nombre = "rol-usuario-000";
        $rol_usuario->descripcion = "descripcion rol-usuario-000";
        $rol_usuario->save();

        $rol_usuario= new Rol_usuario();
        $rol_usuario->nombre = "rol-usuario-001";
        $rol_usuario->descripcion = "descripcion rol-usuario-001";
        $rol_usuario->save();

    }
}
