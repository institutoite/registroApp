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
                'taller' => 'Programación',
                'descripcion' => 'Aprende los fundamentos de programación con distintos lenguajes y paradigmas.'
            ],
            [
                'taller' => 'Inteligencia Artificial DeepSeek',
                'descripcion' => 'Explora el poder de la inteligencia artificial con modelos avanzados como DeepSeek.'
            ],
            [
                'taller' => 'Robótica Básica',
                'descripcion' => 'Introduce a los estudiantes en el mundo de la robótica con circuitos, sensores y microcontroladores.'
            ],
            [
                'taller' => 'Programación Web',
                'descripcion' => 'Curso práctico sobre desarrollo web con tecnologías modernas como HTML, CSS, JavaScript y frameworks.'
            ],
            [
                'taller' => 'JavaScript',
                'descripcion' => 'Domina JavaScript desde lo básico hasta el desarrollo avanzado de aplicaciones dinámicas.'
            ],
        ];

        foreach ($talleres as $taller) {
            Taller::create($taller);
        }
    }
}
