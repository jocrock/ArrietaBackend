<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApoderadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apoderados', function (Blueprint $table) {
            $table->id();
            $table->string('direccion', 100);			
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id','apoderados_idusuario_foerign')
            ->references('id')->on('users');
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
        Schema::dropIfExists('apoderados');
        Schema::table('apoderados', function (Blueprint $table) {
            $table->dropForeign('apoderados_idusuario_foerign');});
    }
}
