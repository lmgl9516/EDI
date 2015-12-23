<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class cTalk
{
    public $aBloque;
    public $aHora;
    public $aTitulo;
    public $aDescripcion;

    public function __construct($Bloque, $pHora, $pTitulo, $pDescripcion) 
    {
        $this->aBloque      = $pEmail;
        $this->aHora        = $pHora;
        $this->aTitulo      = $pTitulo;
        $this->aDescripcion = $pDescripcion;
    }
}

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(9, 30, 0, 'America/Mexico_City'),
           'titulo'      => 'Fanchat',
           'descripcion' => 'Oh my god'
       ]);

        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(19, 30, 0, 'America/Mexico_City'),
           'titulo'      => 'Roomity',
           'descripcion' => 'Where roomies come together'
       ]);



        // $presentaciones = [ new cTalk('', '08:00', 'Registro', '',),
        //                     new cTalk('', '08:45', 'Presentación', '',),
        //                     new cTalk('', '09:00', 'Entorno Económico', '',),
        //                     new cTalk('', '09:40', '', '',),
        //                     new cTalk('', '10:35', '', '',),
        //                     new cTalk('', '11:00', '', '',),
        //                     new cTalk('', '12:00', '', '',),
        //                     new cTalk('', '12:30', '', '',),
        //                     new cTalk('', '13:40', '', '',),
        //                     new cTalk('', '15:30', '', '',),
        //                     new cTalk('', '16:30', '', '',),
        //                     new cTalk('', '16:55', '', '',),
        //                     new cTalk('', '17:25', '', '',),
        //                     new cTalk('', '18:30', '', '',),
        //                     new cTalk('', '18:45', '', '',),
        //                   ];

        // foreach ($presentaciones as $presentacion) 
        // {
        //     DB::table('Presentacion')->insert
        //     ([
        //         'idBloque'    => $presentaciones->aBloque,
        //         'hora'        => $presentaciones->aHora,
        //         'titulo'      => $presentaciones->aTitulo,
        //         'descripcion' => $presentaciones->aDescripcion
        //     ]);
        // }
    }
}

/*



*/