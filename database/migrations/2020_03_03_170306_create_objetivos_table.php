<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetivo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('tesis_id');
            $table->integer('usuario_id');
            $table->integer('objetivo_id')->nullable($value = true);
            $table->integer('obsobj_id')->nullable($value = true);
            $table->foreign('tesis_id')->references('id')->on('tesis');
            $table->foreign('usuario_id')->references('id')->on('usuario');
            $table->foreign('objetivo_id')->references('id')->on('objetivo');
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
        Schema::dropIfExists('objetivo');
    }
}
