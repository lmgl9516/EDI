<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Presentacion', function (Blueprint $table) 
        {
            $table->increments('idPresentacion');
            $table->integer('idBloque')->unsigned();
            $table->string('descripcion');
            $table->timestamps();
        });

        Schema::table('Presentacion', function($table)
        {
            $table->foreign('idBloque')->references('idBloque')->on('Bloque')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Presentacion');
    }
}
