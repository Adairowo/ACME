<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zonas')->insert([
            [
                'nombre_zona' => 'Zona Norte',
                'descripcion' => 'Zona ubicada en el norte de la ciudad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_zona' => 'Zona Sur',
                'descripcion' => 'Zona ubicada en el sur de la ciudad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
