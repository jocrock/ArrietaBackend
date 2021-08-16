<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Apoderado;
use App\Models\User;

class ApoderadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'name'=>'apod1',
            'email'=>'apoderado@gmail.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ci'=>'6123786',
            'nombres'=>'RICARDO',
            'apellidos'=>'CUBA COSTA',
            'fecha_nacimiento'=>'1976/01/09',
            'telefono'=>'76543253',
            'fotografia'=>'NONE',
            'tipo'=>'APODERADO',
            'genero'=>'VARON'
           ]);
           Apoderado::create([
            'user_id'=>$user->id,
            'direccion'=>'Av Tacna #67',
           ]);
    }
}
