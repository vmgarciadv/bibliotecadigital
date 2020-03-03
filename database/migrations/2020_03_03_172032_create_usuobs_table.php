<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usu_obs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id');
            $table->integer('observacion_id');
            $table->foreign('usuario_id')->references('id')->on('usuario');
            $table->foreign('observacion_id')->references('id')->on('observacion');
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
        Schema::dropIfExists('usu_obs');
    }
}
