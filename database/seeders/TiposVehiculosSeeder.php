<?php

namespace Database\Seeders;

use App\Models\Tipo_vehiculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposVehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo_vehiculo= new Tipo_vehiculo();
        $tipo_vehiculo->nombre="tipo-000";
        $tipo_vehiculo->descripcion="descripcion tipo vehiculo 000";
        $tipo_vehiculo->save();

        $tipo_vehiculo= new Tipo_vehiculo();
        $tipo_vehiculo->nombre="tipo-001";
        $tipo_vehiculo->descripcion="descripcion tipo vehiculo 001";
        $tipo_vehiculo->save();

    }
}
