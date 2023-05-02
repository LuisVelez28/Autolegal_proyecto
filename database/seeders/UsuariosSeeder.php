<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario=new Usuario();
        //$usuario->id_cliente=;
        $usuario->id_empleado= 1;
        $usuario->username= "admin";
        //como se protege el de password
        $usuario->password= "admin";
        $usuario->email= "admin@admin.com";
        //esta campo es generado automaticamente
        $usuario->estado= 1;
        $usuario->id_rol_usuario= 1;
        $usuario->save();

        $usuario=new Usuario();
        //$usuario->id_cliente=;
        $usuario->id_empleado= 1;
        $usuario->username= "emp";
        //como se protege el de password
        $usuario->password= "emp";
        $usuario->email= "emp@emp.com";
        //esta campo es generado automaticamente
        $usuario->estado= 1;
        $usuario->id_rol_usuario= 2;
        $usuario->save();

    }
}
