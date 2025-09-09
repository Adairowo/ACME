<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proyectos')->insert([
            [
                'cliente_id' => 1,
                'nombre_proyecto' => 'Proyecto Alpha',
                'direccion_proyecto' => 'Dirección Alpha',
                'zona_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cliente_id' => 2,
                'nombre_proyecto' => 'Proyecto Beta',
                'direccion_proyecto' => 'Dirección Beta',
                'zona_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
