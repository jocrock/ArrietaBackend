<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('especialidad', 200)->nullable();
            $table->integer('horasacademicas');
			$table->date('fechaingreso')->nullable();
            $table->foreign('user_id','profesors_idusuario_foerign')
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
        Schema::dropIfExists('profesors');
        Schema::table('profesors', function (Blueprint $table) {
            $table->dropForeign('profesors_idusuario_foerign');});
    }
}
