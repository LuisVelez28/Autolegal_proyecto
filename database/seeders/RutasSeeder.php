<?php

namespace Database\Seeders;

use App\Models\Ruta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ruta = new Ruta();
        $ruta->id_tipo_ruta= 1;
        $ruta->nombre= "ruta-000";
        $ruta->save();
    }
}
