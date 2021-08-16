<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /* $this->call(ProfesorSeeder::class);
        $this->call(ApoderadoSeeder::class);
        $this->call(EstudianteSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(CursoSeeder::class);*/
        $this->call(CalificacionSeeder::class);
    }
}
