<?php

namespace Database\Seeders;

use App\Models\Tipo_ruta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposRutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo_ruta= new Tipo_ruta();
        $tipo_ruta->nombre = "tipo-ruta-000";
        $tipo_ruta->descripcion = "descripcion tipo-ruta-000";
        $tipo_ruta->save();

        $tipo_ruta= new Tipo_ruta();
        $tipo_ruta->nombre = "tipo-ruta-001";
        $tipo_ruta->descripcion = "descripcion tipo-ruta-001";
        $tipo_ruta->save();


    }
}
