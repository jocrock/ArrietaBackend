<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idcurso');
            $table->unsignedBigInteger('idestudiante');
            $table->enum('rango',['ED','DA','DO','DP'])->nullable();
            $table->double('puntaje', 8, 2)->nullable();
            $table->enum('situacion',['APROBADO','REPROBADO'])->nullable();
            $table->foreign('idcurso','calificacions_idcurso_foerign')
            ->references('id')->on('cursos');

            
            $table->foreign('idestudiante','calificacions_idestudiante_foerign')
            ->references('id')->on('estudiantes');

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
        Schema::dropIfExists('calificacions');
        Schema::table('calificacions', function (Blueprint $table) {
            $table->dropForeign('calificacions_idcurso_foerign');});
        Schema::table('calificacions', function (Blueprint $table) {
            $table->dropForeign('calificacions_idestudiante_foerign');});
    }
}
