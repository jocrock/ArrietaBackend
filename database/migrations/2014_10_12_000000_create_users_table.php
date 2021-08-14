<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email',50)->unique();
            $table->string('ci', 20)->nullable();
            $table->string('nombres', 50);
			$table->string('apellidos', 50);
			$table->date('fechanacimiento');
            $table->string('telefono', 10);
            $table->string('fotografia', 50)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',50);
            $table->enum('tipo',['ESTUDIANTE','PROFESOR','ADMINISTRADOR','APODERADO','INVITADO'])->default('INVITADO');
            $table->enum('genero',['VARON','MUJER','OTRO'])->default('VARON');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
