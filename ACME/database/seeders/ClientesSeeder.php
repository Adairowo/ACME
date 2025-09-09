<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre_cliente' => 'Cliente Uno',
                'direccion_contacto' => 'Calle 1, Ciudad',
                'telefono' => '123456789',
                'email' => 'cliente1@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_cliente' => 'Cliente Dos',
                'direccion_contacto' => 'Calle 2, Ciudad',
                'telefono' => '987654321',
                'email' => 'cliente2@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
