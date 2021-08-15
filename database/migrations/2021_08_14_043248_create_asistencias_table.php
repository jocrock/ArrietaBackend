<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('calificacion_id');
            $table->integer('asistio');
            $table->integer('faltas');
            $table->integer('retrasos');
            $table->integer('licencias');
            $table->integer('dias_trabajados');
            $table->foreign('calificacion_id','asistencias_idcalificacion_foerign')
            ->references('id')->on('calificacions')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('asistencias');
        Schema::table('asistencias', function (Blueprint $table) {
            $table->dropForeign('asistencias_idcalificacion_foerign');});
    }
}
