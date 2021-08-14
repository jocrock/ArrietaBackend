<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curso_id');
            $table->foreignId('valoracion_id');
            $table->string('titulo',50);
            $table->text('descripcion');
            $table->date('fecha_publicacion');
            $table->date('fecha_entrega'); 
            $table->foreign('curso_id','tareas_curso_id_foerign')
            ->references('id')->on('cursos')->onUpdate('cascade')->onDelete('cascade'); 
            $table->foreign('valoracion_id','tareas_valoracion_id_foerign')
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
        Schema::dropIfExists('tareas');
        Schema::table('tareas', function (Blueprint $table) {
            $table->dropForeign('tareas_curso_id_foerign');});
        Schema::table('tareas', function (Blueprint $table) {
            $table->dropForeign('tareas_valoracion_id_foerign');});
    }
}
