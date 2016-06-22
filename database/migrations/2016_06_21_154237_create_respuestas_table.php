<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('idrespuesta');
            $table->integer('pregunta_id')->unsigned();
            $table->string('descripcion', 150);
            $table->boolean('es_correcta');
            $table->foreign('pregunta_id')
                ->references('idpregunta')
                ->on('preguntas')
                ->onDelete('cascade');
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
        Schema::drop('respuestas');
    }
}
