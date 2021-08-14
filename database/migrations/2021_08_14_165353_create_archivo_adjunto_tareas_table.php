<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivoAdjuntoTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivo_adjunto_tareas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tarea_id');
            $table->date('fecha_creacion');
            $table->string('nombre',100);
            $table->string('link',150);
            $table->string('extencion',10)->nullable();
            $table->text('caracteristicas');
            $table->foreign('tarea_id','archivo_adjunto_tareas_tarea_id_foerign')
            ->references('id')->on('tareas')->onUpdate('cascade')->onDelete('cascade'); 
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
        Schema::dropIfExists('archivo_adjunto_tareas');
        Schema::table('archivo_adjunto_tareas', function (Blueprint $table) {
            $table->dropForeign('archivo_adjunto_tareas_tarea_id_foerign');});
    }
}
