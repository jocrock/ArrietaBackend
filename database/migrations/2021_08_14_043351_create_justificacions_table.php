<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJustificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('justificacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detalle_asistencia_id');
            $table->string('nombre',50);
            $table->string('descripcion',250);
            $table->string('link',100);
            $table->foreign('detalle_asistencia_id','justificacion_iddetalle_asistencia_foerign')
            ->references('id')->on('detalle_asistencias')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('justificacions');
        Schema::table('justificacions', function (Blueprint $table) {
            $table->dropForeign('justificacion_iddetalle_asistencia_foerign');});
    }
}
