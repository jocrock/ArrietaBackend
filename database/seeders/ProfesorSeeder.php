<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profesor;

use Illuminate\Database\Seeder;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user=User::create([
        'name'=>'jocrock',
        'email'=>'jocrock.cga@gmail.com',
        'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'ci'=>'5732603',
        'nombres'=>'JOSÉ',
		'apellidos'=>'COAQUIRA COPA',
		'fecha_nacimiento'=>'1986/11/09',
        'telefono'=>'61831994',
        'fotografia'=>'NONE',
        'tipo'=>'PROFESOR',
        'genero'=>'VARON'
       ]);
       Profesor::create([
        'user_id'=>$user->id,
        'especialidad'=>'Ingeniero en Sistemas',
        'horasacademicas'=>'56',
        'fechaingreso'=>'2021/04/15'
       ]);
    }
}
