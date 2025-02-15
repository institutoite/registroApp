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
            ['ciudad' => 'Sucre'],      // Capital constitucional
            ['ciudad' => 'La Paz'],     // Sede de gobierno
            ['ciudad' => 'Cochabamba'],
            ['ciudad' => 'Santa Cruz de la Sierra'],
            ['ciudad' => 'Oruro'],
            ['ciudad' => 'Potosí'],
            ['ciudad' => 'Tarija'],
            ['ciudad' => 'Trinidad'],
            ['ciudad' => 'Cobija']
        ];

        DB::table('ciudads')->insert($ciudades);
    }
}
