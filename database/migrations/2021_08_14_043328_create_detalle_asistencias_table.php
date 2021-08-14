<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_asistencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idasistencia');
            $table->date('fecha');
            $table->enum('detalle',['Asistio','Retraso','Licencia','Falta']);
            $table->string('puntaje',250)->nullable();
            $table->foreign('idasistencia','detalle_asistencias_idasistencia_foerign')
            ->references('id')->on('asistencias')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('detalle_asistencias');
        Schema::table('detalle_asistencias', function (Blueprint $table) {
            $table->dropForeign('detalle_asistencias_idasistencia_foerign');});
    }
}
