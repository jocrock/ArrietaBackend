<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivoAdjuntoEntregaTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivo_adjunto_entrega_tareas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entrega_tarea_id');
            $table->string('nombre',100);
            $table->string('link',100);
            $table->string('extencion',10);
            $table->text('caracteristicas');
            $table->date('fecha_creacion');
            $table->foreign('entrega_tarea_id','archivo_adjunto_entrega_tareas_tarea_id_foerign')
            ->references('id')->on('entrega_tareas')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('archivo_adjunto_entrega_tareas');
        Schema::table('archivo_adjunto_entrega_tareas', function (Blueprint $table) {
            $table->dropForeign('archivo_adjunto_entrega_tareas_tarea_id_foerign');});
    }
}
