<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materia;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create([
            'area'=>'Tecnica Tecnologica', 
            'descripcion'=>'Programacion I', 
            'nivel'=>'SECUNDARIA',
            'escolaridad'=>1
           ]);
        Materia::create([
        'area'=>'Tecnica Tecnologica', 
        'descripcion'=>'Programacion II', 
        'nivel'=>'SECUNDARIA',
        'escolaridad'=>2
        ]);
    }
}
