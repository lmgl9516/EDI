<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Encuesta', function (Blueprint $table) 
        {
            $table->increments('idEncuesta');
            $table->integer('idPresentacion')->unsigned();
            $table->string('url');
            $table->timestamps();
        });

        Schema::table('Encuesta', function($table)
        {
            $table->foreign('idPresentacion')->references('idPresentacion')->on('Presentacion')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Encuesta');
    }
}
