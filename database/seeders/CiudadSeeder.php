<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ciudades = [
            ['ciudad' => 'Santa Cruz de la Sierra', 'estado' => true],
            ['ciudad' => 'La Paz', 'estado' => false],     // Sede de gobierno
            ['ciudad' => 'Cochabamba', 'estado' => false],
            ['ciudad' => 'Sucre', 'estado' => false],      // Capital constitucional
            ['ciudad' => 'Oruro', 'estado' => false],
            ['ciudad' => 'Potosí', 'estado' => false],
            ['ciudad' => 'Tarija', 'estado' => false],
            ['ciudad' => 'Trinidad', 'estado' => false],
            ['ciudad' => 'Cobija', 'estado' => false]
        ];

        DB::table('ciudads')->insert($ciudades);
    }
}
