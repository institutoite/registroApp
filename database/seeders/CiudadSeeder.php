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
            ['ciudad' => 'Santa Cruz de la Sierra'],
            ['ciudad' => 'La Paz'],     // Sede de gobierno
            ['ciudad' => 'Cochabamba'],
            ['ciudad' => 'Sucre'],      // Capital constitucional
            ['ciudad' => 'Oruro'],
            ['ciudad' => 'Potosí'],
            ['ciudad' => 'Tarija'],
            ['ciudad' => 'Trinidad'],
            ['ciudad' => 'Cobija']
        ];

        DB::table('ciudads')->insert($ciudades);
    }
}
