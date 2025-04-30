<?php

namespace Database\Seeders;

use App\Models\Taller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TallerSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $talleres = [
            [
                'taller' => 'El Optimizador Pampeño y Equipat',
                'descripcion' => 'Taller para emprendedores '
            ],
        ];

        foreach ($talleres as $taller) {
            Taller::create($taller);
        }
    }
}
