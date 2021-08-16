<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([
            'materia_id'=>1,
            'profesor_id'=>1,
            'paralelo'=>'A',
            'gestion'=>2021
           ]);
    }
}
