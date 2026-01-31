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
                'taller' => 'División paso a paso',
                'descripcion' => 'Estrategias claras para dividir con números enteros y decimales.',
                'estado' => true
            ],
            [
                'taller' => 'Tabla de multiplicar sin miedo',
                'descripcion' => 'Trucos, patrones y práctica guiada para dominar las tablas.',
                'estado' => true
            ],
            [
                'taller' => 'Factorización: claves y errores',
                'descripcion' => 'Técnicas de factorización y errores comunes más frecuentes.',
                'estado' => false
            ],
            [
                'taller' => 'Potenciación simplificada',
                'descripcion' => 'Potencias, exponentes negativos y por qué confunden tanto.',
                'estado' => false
            ],
            [
                'taller' => 'Radicación desmitificada',
                'descripcion' => 'Raíces cuadradas, cúbicas y su relación con las potencias.',
                'estado' => false
            ],
            [
                'taller' => 'Fracciones sin complicaciones',
                'descripcion' => 'Sumas y restas con denominadores distintos sin dolor.',
                'estado' => false
            ],
            [
                'taller' => 'Regla de tres: ¿atajo o trampa?',
                'descripcion' => 'Cuándo funciona, cuándo falla y cómo aplicarla bien.',
                'estado' => false
            ],
            [
                'taller' => 'Ecuaciones lineales sin drama',
                'descripcion' => 'Resolución paso a paso y verificación de resultados.',
                'estado' => false
            ],
            [
                'taller' => 'Álgebra básica para todos',
                'descripcion' => 'Operaciones con variables y simplificación de expresiones.',
                'estado' => false
            ],
            [
                'taller' => 'Multiplicación fácil',
                'descripcion' => 'Técnicas rápidas para multiplicar números grandes y pequeños.',
                'estado' => false
            ],
        ];

        foreach ($talleres as $taller) {
            Taller::create($taller);
        }
    }
}
