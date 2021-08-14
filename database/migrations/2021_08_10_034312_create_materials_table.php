<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idcurso');
            $table->unsignedBigInteger('idtema');
            $table->string('titulo', 200);
            $table->string('descripcion');
            $table->date('fechapublicacion');
            $table->foreign('idcurso','materials_idcurso_foerign')
            ->references('id')->on('cursos');
            $table->foreign('idtema','materials_idtema_foerign')
            ->references('id')->on('temas');
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
        Schema::dropIfExists('materials');
        Schema::table('materials', function (Blueprint $table) {
            $table->dropForeign('materials_idtema_foerign');});
        Schema::table('materials', function (Blueprint $table) {
            $table->dropForeign('materials_idcurso_foerign');});
    }
}
