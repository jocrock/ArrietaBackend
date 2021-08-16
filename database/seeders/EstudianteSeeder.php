<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\models\Estudiante;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'name'=>'estudiante1',
            'email'=>'estudiante1@gmail.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ci'=>'10001111',
            'nombres'=>'LUIS ANDRES',
            'apellidos'=>'ARANCIBIA ARRAYA',
            'fecha_nacimiento'=>'2004/01/19',
            'telefono'=>'70001234',
            'fotografia'=>'NONE',
            'tipo'=>'ESTUDIANTE',
            'genero'=>'VARON'
           ]);
        Estudiante::create([
            'user_id'=>$user->id,
            'rude'=>'98756473645763',	
            'estado'=>'INSCRITO',
            'apoderado_id'=>1
           ]);
    
        $user=User::create([
            'name'=>'estudiante2',
            'email'=>'estudiante2@gmail.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ci'=>'10001211',
            'nombres'=>'ALEXIS JHONATAN',
            'apellidos'=>'ARIVIRI',
            'fecha_nacimiento'=>'2004/01/19',
            'telefono'=>'70001234',
            'fotografia'=>'NONE',
            'tipo'=>'ESTUDIANTE',
            'genero'=>'VARON'
           ]);
        Estudiante::create([
            'user_id'=>$user->id,
            'rude'=>'98756473645764',	
            'estado'=>'INSCRITO',
            'apoderado_id'=>1
           ]);

        $user=User::create([
            'name'=>'estudiante3',
            'email'=>'estudiante3@gmail.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ci'=>'10001311',
            'nombres'=>'JHYMMY ANGHELO',
            'apellidos'=>'BASCOPE LOPEZ',
            'fecha_nacimiento'=>'2004/01/19',
            'telefono'=>'70001234',
            'fotografia'=>'NONE',
            'tipo'=>'ESTUDIANTE',
            'genero'=>'VARON'
           ]);
        Estudiante::create([
            'user_id'=>$user->id,
            'rude'=>'98756473645765',	
            'estado'=>'INSCRITO',
            'apoderado_id'=>1
           ]);
    
        $user=User::create([
            'name'=>'estudiante4',
            'email'=>'estudiante4@gmail.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ci'=>'10001411',
            'nombres'=>'DANIELA MARGARITA',
            'apellidos'=>'BLANCO SALVATIERRA',
            'fecha_nacimiento'=>'2004/01/19',
            'telefono'=>'70001234',
            'fotografia'=>'NONE',
            'tipo'=>'ESTUDIANTE',
            'genero'=>'MUJER'
           ]);
        Estudiante::create([
            'user_id'=>$user->id,
            'rude'=>'98756473645766',	
            'estado'=>'INSCRITO',
            'apoderado_id'=>1
           ]);

        $user=User::create([
            'name'=>'estudiante5',
            'email'=>'estudiante5@gmail.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ci'=>'1000611',
            'nombres'=>'DIEGO LEONEL',
            'apellidos'=>'DAVILA LAPACA',
            'fecha_nacimiento'=>'2004/01/19',
            'telefono'=>'70001234',
            'fotografia'=>'NONE',
            'tipo'=>'ESTUDIANTE',
            'genero'=>'VARON'
           ]);
        Estudiante::create([
            'user_id'=>$user->id,
            'rude'=>'98756473645767',	
            'estado'=>'INSCRITO',
            'apoderado_id'=>1
           ]);
        
        $user=User::create([
            'name'=>'estudiante6',
            'email'=>'estudiante6@gmail.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ci'=>'10001113',
            'nombres'=>'JHOSELIN MARCELA',
            'apellidos'=>'ESCOBAR LAZO ',
            'fecha_nacimiento'=>'2004/01/19',
            'telefono'=>'70001234',
            'fotografia'=>'NONE',
            'tipo'=>'ESTUDIANTE',
            'genero'=>'MUJER'
           ]);
        Estudiante::create([
            'user_id'=>$user->id,
            'rude'=>'98756473645768',	
            'estado'=>'INSCRITO',
            'apoderado_id'=>1
           ]);

        $user=User::create([
            'name'=>'estudiante7',
            'email'=>'estudiante7@gmail.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ci'=>'10001115',
            'nombres'=>'ARIEL FERNANDO',
            'apellidos'=>'GUTIERREZ PEREZ',
            'fecha_nacimiento'=>'2004/01/19',
            'telefono'=>'70001234',
            'fotografia'=>'NONE',
            'tipo'=>'ESTUDIANTE',
            'genero'=>'VARON'
           ]);
        Estudiante::create([
            'user_id'=>$user->id,
            'rude'=>'98756473645769',	
            'estado'=>'INSCRITO',
            'apoderado_id'=>1
           ]);

        $user=User::create([
            'name'=>'estudiante8',
            'email'=>'estudiante8@gmail.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ci'=>'10001116',
            'nombres'=>'FABRICIO ANDRE',
            'apellidos'=>'LOPEZ PACO',
            'fecha_nacimiento'=>'2004/01/19',
            'telefono'=>'70001234',
            'fotografia'=>'NONE',
            'tipo'=>'ESTUDIANTE',
            'genero'=>'VARON'
           ]);
        Estudiante::create([
            'user_id'=>$user->id,
            'rude'=>'98756473645770',	
            'estado'=>'INSCRITO',
            'apoderado_id'=>1
           ]);

        $user=User::create([
            'name'=>'estudiante9',
            'email'=>'estudiante9@gmail.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ci'=>'10001117',
            'nombres'=>'DEYVID GABRIEL',
            'apellidos'=>'NINA PANIAGUA',
            'fecha_nacimiento'=>'2004/01/19',
            'telefono'=>'70001234',
            'fotografia'=>'NONE',
            'tipo'=>'ESTUDIANTE',
            'genero'=>'VARON'
           ]);
        Estudiante::create([
            'user_id'=>$user->id,
            'rude'=>'98756473645771',	
            'estado'=>'INSCRITO',
            'apoderado_id'=>1
           ]);
        $user=User::create([
            'name'=>'estudiante10',
            'email'=>'estudiante10@gmail.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ci'=>'10001118',
            'nombres'=>'STEVE DAVID',
            'apellidos'=>'PASTOR CONDARCO',
            'fecha_nacimiento'=>'2004/01/19',
            'telefono'=>'70001234',
            'fotografia'=>'NONE',
            'tipo'=>'ESTUDIANTE',
            'genero'=>'VARON'
           ]);
        Estudiante::create([
            'user_id'=>$user->id,
            'rude'=>'98756473645772',	
            'estado'=>'INSCRITO',
            'apoderado_id'=>1
           ]);
        $user=User::create([
            'name'=>'estudiante12',
            'email'=>'estudiante12@gmail.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ci'=>'10001119',
            'nombres'=>'JERUSALEN LOURDES',
            'apellidos'=>'ROJAS MAMANI',
            'fecha_nacimiento'=>'2004/01/19',
            'telefono'=>'70001234',
            'fotografia'=>'NONE',
            'tipo'=>'ESTUDIANTE',
            'genero'=>'MUJER'
           ]);
        Estudiante::create([
            'user_id'=>$user->id,
            'rude'=>'98756473645773',	
            'estado'=>'INSCRITO',
            'apoderado_id'=>1
           ]);
        $user=User::create([
            'name'=>'estudiante13',
            'email'=>'estudiante13@gmail.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ci'=>'10001120',
            'nombres'=>'LUCIANA ANTONELLA',
            'apellidos'=>'SALAS ROJAS',
            'fecha_nacimiento'=>'2004/01/19',
            'telefono'=>'70001234',
            'fotografia'=>'NONE',
            'tipo'=>'ESTUDIANTE',
            'genero'=>'MUJER'
           ]);
        Estudiante::create([
            'user_id'=>$user->id,
            'rude'=>'98756473645774',	
            'estado'=>'INSCRITO',
            'apoderado_id'=>1
           ]);
        $user=User::create([
            'name'=>'estudiante14',
            'email'=>'estudiante14@gmail.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ci'=>'10001121',
            'nombres'=>'ROYER JOEL',
            'apellidos'=>'SANTOS CRUZ',
            'fecha_nacimiento'=>'2004/01/19',
            'telefono'=>'70001234',
            'fotografia'=>'NONE',
            'tipo'=>'ESTUDIANTE',
            'genero'=>'VARON'
           ]);
        Estudiante::create([
            'user_id'=>$user->id,
            'rude'=>'98756473645775',	
            'estado'=>'INSCRITO',
            'apoderado_id'=>1
           ]);
        $user=User::create([
            'name'=>'estudiante15',
            'email'=>'estudiante15@gmail.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ci'=>'10001122',
            'nombres'=>'ARIADNE VALERIA',
            'apellidos'=>'TICONA LOAYZA',
            'fecha_nacimiento'=>'2004/01/19',
            'telefono'=>'70001234',
            'fotografia'=>'NONE',
            'tipo'=>'ESTUDIANTE',
            'genero'=>'MUJER'
           ]);
        Estudiante::create([
            'user_id'=>$user->id,
            'rude'=>'98756473645776',	
            'estado'=>'INSCRITO',
            'apoderado_id'=>1
           ]);
        $user=User::create([
            'name'=>'estudiante16',
            'email'=>'estudiante16@gmail.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'ci'=>'10001123',
            'nombres'=>'AMIRA MERCEDES',
            'apellidos'=>'ZEBALLOS DEL CARPIO',
            'fecha_nacimiento'=>'2004/01/19',
            'telefono'=>'70001234',
            'fotografia'=>'NONE',
            'tipo'=>'ESTUDIANTE',
            'genero'=>'MUJER'
           ]);
        Estudiante::create([
            'user_id'=>$user->id,
            'rude'=>'98756473645777',	
            'estado'=>'INSCRITO',
            'apoderado_id'=>1
           ]);
    }
}
