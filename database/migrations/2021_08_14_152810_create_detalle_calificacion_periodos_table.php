<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleCalificacionPeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_calificacion_periodos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('periodo_calificacion_id');
            $table->foreignId('valoracion_id');
            $table->float('puntaje',8,4);
            $table->foreign('periodo_calificacion_id','detalle_periodo_calificacions_periodo_calificacion_id_foerign')
            ->references('id')->on('periodo_calificacions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('valoracion_id','detalle_periodo_calificacions_valoracion_id_foerign')
            ->references('id')->on('valoracions');
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
        Schema::dropIfExists('detalle_calificacion_periodos');
        Schema::table('detalle_calificacion_periodos', function (Blueprint $table) {
            $table->dropForeign('detalle_periodo_calificacions_periodo_calificacion_id_foerign');});

        Schema::table('detalle_calificacion_periodos', function (Blueprint $table) {
            $table->dropForeign('detalle_periodo_calificacions_valoracion_id_foerign');});
    }
}
