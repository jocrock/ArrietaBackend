<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivosMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos_materials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idmaterial');
            $table->string('nombre', 200);
            $table->string('link',200);
            $table->string('extencion',10);
            $table->string('descripcion',250);
            $table->foreign('idmaterial','archivos_materials_idmaterial_foerign')
            ->references('id')->on('materials')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('archivos_materials');
        Schema::table('archivos_materials', function (Blueprint $table) {
            $table->dropForeign('archivos_materials_idmaterial_foerign');});
    }
}
