<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObsobjTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obs_obj', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('observacion_id');
            $table->integer('objetivo_id');
            $table->foreign('observacion_id')->references('id')->on('observacion');
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
        Schema::dropIfExists('obs_obj');
    }
}
