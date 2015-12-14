<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatrocinioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Patrocinio', function (Blueprint $table) 
        {
            $table->increments('idpatrocinio');
            $table->integer('idEmpresa')->unsigned();
            $table->string('descripcion');
            $table->timestamps();
        });

        Schema::table('Patrocinio', function($table)
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
        Schema::drop('Patrocinio');
    }
}
