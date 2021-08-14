<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregaTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrega_tareas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detalle_calificacion_periodo_id');
            $table->foreignId('tarea_id');
            $table->date('fecha_entrega');
            $table->string('titulo',50);
            $table->text('descripcion')->nullable();
            $table->float('puntaje',8,4);
            $table->enum('estado',['PENDIENTE','ENTREGADO','ENTREGA CON RETRASO']);
            $table->foreign('tarea_id','entrega_tareas_tarea_id_foerign')
            ->references('id')->on('tareas')->onUpdate('cascade')->onDelete('cascade'); 
            $table->foreign('detalle_calificacion_periodo_id','entrega_tareas_detalle_calificacion_periodo_id_foerign')
            ->references('id')->on('detalle_calificacion_periodos')->onUpdate('cascade')->onDelete('cascade'); 
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
        Schema::dropIfExists('entrega_tareas');
        Schema::table('entrega_tareas', function (Blueprint $table) {
            $table->dropForeign('entrega_tareas_tarea_id_foerign');});
        Schema::table('entrega_tareas', function (Blueprint $table) {
            $table->dropForeign('entrega_tareas_detalle_calificacion_periodo_id_foerign');});
    }
}
