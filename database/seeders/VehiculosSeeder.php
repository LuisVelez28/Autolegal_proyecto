<?php

namespace Database\Seeders;

use App\Models\Vehiculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehiculo= new Vehiculo();
        $vehiculo->placa="placa-000";
        $vehiculo->modelo="modelo-000";
        $vehiculo->marca="marca-000";
        $vehiculo->capacidad=500;
        //es automatico
        //$vehiculo->estado=$request->estado;
        $vehiculo->id_tipo_vehiculo=1;
        $vehiculo->save();
    }
}
