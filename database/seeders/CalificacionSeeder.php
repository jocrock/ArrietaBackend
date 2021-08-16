<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Calificacion;

class CalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Calificacion::create([
            'curso_id'=>1,
            'estudiante_id'=>1,
        ]);
        Calificacion::create([
            'curso_id'=>1,
            'estudiante_id'=>2,
        ]);
        Calificacion::create([
            'curso_id'=>1,
            'estudiante_id'=>3,
        ]);
        Calificacion::create([
            'curso_id'=>1,
            'estudiante_id'=>4,
        ]);
        Calificacion::create([
            'curso_id'=>1,
            'estudiante_id'=>5,
        ]);
        Calificacion::create([
            'curso_id'=>1,
            'estudiante_id'=>6,
        ]);
        Calificacion::create([
            'curso_id'=>1,
            'estudiante_id'=>7,
        ]);
        Calificacion::create([
            'curso_id'=>1,
            'estudiante_id'=>8,
        ]);
        Calificacion::create([
            'curso_id'=>1,
            'estudiante_id'=>9,
        ]);
        Calificacion::create([
            'curso_id'=>1,
            'estudiante_id'=>10,
        ]);
        Calificacion::create([
            'curso_id'=>1,
            'estudiante_id'=>11,
        ]);
        Calificacion::create([
            'curso_id'=>1,
            'estudiante_id'=>12,
        ]);
        Calificacion::create([
            'curso_id'=>1,
            'estudiante_id'=>13,
        ]);
        Calificacion::create([
            'curso_id'=>1,
            'estudiante_id'=>14,
        ]);
        Calificacion::create([
            'curso_id'=>1,
            'estudiante_id'=>15,
        ]);
    }
}
