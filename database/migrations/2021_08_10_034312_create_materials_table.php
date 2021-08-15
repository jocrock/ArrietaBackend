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
            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('tema_id');
            $table->string('titulo', 200);
            $table->string('descripcion');
            $table->date('fechapublicacion');
            $table->foreign('curso_id','materials_curso_id_foerign')
            ->references('id')->on('cursos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('tema_id','materials_tema_id_foerign')
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
            $table->dropForeign('materials_tema_id_foerign');});
        Schema::table('materials', function (Blueprint $table) {
            $table->dropForeign('materials_curso_id_foerign');});
    }
}
