<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materia_id');
            $table->unsignedBigInteger('profesor_id');
            $table->string('paralelo', 80);
            $table->integer('gestion');
            $table->foreign('materia_id','cursos_materia_id_foerign')
            ->references('id')->on('materias');
            $table->foreign('profesor_id','cursos_profesor_id_foerign')
            ->references('id')->on('profesors');
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
        Schema::dropIfExists('cursos');
        Schema::table('cursos', function (Blueprint $table) {
            $table->dropForeign('cursos_idprofesor_foerign');});
        Schema::table('cursos', function (Blueprint $table) {
            $table->dropForeign('cursos_idmateria_foerign');});
    }
}
