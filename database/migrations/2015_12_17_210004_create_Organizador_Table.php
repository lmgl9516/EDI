<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Organizador', function (Blueprint $table) 
        {
            $table->increments('idOrganizador');
            $table->integer('idEmpresa')->unsigned();
            $table->timestamps();
        });

        Schema::table('Organizador', function($table)
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
        Schema::drop('Organizador');
    }
}
