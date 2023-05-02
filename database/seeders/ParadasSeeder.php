<?php

namespace Database\Seeders;

use App\Models\Parada;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParadasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parada = new Parada();
        $parada->id_ruta = 1;
        $parada->nombre = "parada-000";
        $parada->posicion = "[-75.51738,5.06889]";
        $parada->save();

        $parada = new Parada();
        $parada->id_ruta = 1;
        $parada->nombre = "parada-001";
        $parada->posicion = "[-75.65,5.06889]";
        $parada->save();

    }
}
