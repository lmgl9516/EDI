<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePonenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ponente', function (Blueprint $table) 
        {
            $table->increments('idPonente');
            $table->integer('idEmpresa')->unsigned();
            $table->integer('idPresentacion')->unsigned();
            $table->string('titulo', 50);
            $table->string('nombre');
            $table->string('apellido');
            $table->string('detalles');
            $table->timestamps();
        });

        Schema::table('Ponente', function($table)
        {
            $table->foreign('idEmpresa')->references('idEmpresa')->on('Empresa')->onDelete('cascade');
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
        Schema::drop('Ponente');
    }
}
