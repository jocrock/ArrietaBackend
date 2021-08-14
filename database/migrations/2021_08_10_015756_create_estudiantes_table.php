<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('rude', 20);			
            $table->unsignedBigInteger('idusuario');
			$table->unsignedBigInteger('idapoderado');
            $table->foreign('idusuario','estudiantes_idusuario_foerign')
            ->references('id')->on('users');
            $table->foreign('idapoderado','estudiantes_idapoderado_foerign')
            ->references('id')->on('apoderados');
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
        Schema::dropIfExists('estudiantes');
        Schema::table('estudiantes', function (Blueprint $table) {
            $table->dropForeign('estudiantes_idusuario_foerign');});
        Schema::table('estudiantes', function (Blueprint $table) {
            $table->dropForeign('estudiantes_idapoderado_foerign');});
    }
}
