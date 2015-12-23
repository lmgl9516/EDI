<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatrocinadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Patrocinador', function (Blueprint $table) 
        {
            $table->increments('idPatrocinio');
            $table->integer('idEmpresa')->unsigned();
            $table->timestamps();
        });

        Schema::table('Patrocinador', function($table)
        {
            $table->foreign('idEmpresa')->references('idEmpresa')->on('Empresa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Patrocinador');
    }
}
