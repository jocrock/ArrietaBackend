<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idcurso');
            $table->string('titulo', 200);
            $table->string('descripcion');
            $table->foreign('idcurso','cursos_idcurso_foerign')
            ->references('id')->on('cursos');
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
        Schema::dropIfExists('temas');
        Schema::table('temas', function (Blueprint $table) {
            $table->dropForeign('cursos_idcurso_foerign');});
    }
}
