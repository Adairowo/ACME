<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VersionesPlanosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('versiones_planos')->insert([
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
