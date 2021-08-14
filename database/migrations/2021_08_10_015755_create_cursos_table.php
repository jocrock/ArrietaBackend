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
            $table->unsignedBigInteger('idmateria');
            $table->unsignedBigInteger('idprofesor');
            $table->string('paralelo', 80);
            $table->integer('gestion');
            $table->foreign('idmateria','cursos_idmateria_foerign')
            ->references('id')->on('materias');
            $table->foreign('idprofesor','cursos_idprofesor_foerign')
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
