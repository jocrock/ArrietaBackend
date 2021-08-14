<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodoCalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodo_calificacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('calificacion_id');
            $table->unsignedBigInteger('periodo_id');
            $table->string('detalle',100);
            $table->float('puntaje',8,4);
            $table->foreign('calificacion_id','periodo_calificacions_calificacion_id_foerign')
            ->references('id')->on('calificacions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('periodo_id','periodo_calificacions_periodo_id_foerign')
            ->references('id')->on('periodos');
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
        Schema::dropIfExists('periodo_calificacions');
        Schema::table('periodo_calificacions', function (Blueprint $table) {
            $table->dropForeign('periodo_calificacions_calificacion_id_foerign');});

        Schema::table('periodo_calificacions', function (Blueprint $table) {
            $table->dropForeign('periodo_calificacions_periodo_id_foerign');});
    
    }
}
