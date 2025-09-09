<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
