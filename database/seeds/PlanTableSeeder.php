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
           'hora'        => Carbon::createFromTime(8, 00, 0, 'America/Mexico_City'),
           'titulo'      => 'Registro',
           'descripcion' => ''
       ]);

        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(8, 45, 0, 'America/Mexico_City'),
           'titulo'      => 'Presentación',
           'descripcion' => ''
       ]);

        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(9, 00, 0, 'America/Mexico_City'),
           'titulo'      => 'Entorno Económico',
           'descripcion' => ''
       ]);

        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(9, 40, 0, 'America/Mexico_City'),
           'titulo'      => 'Innovación en la cadena de valor: información y tecnología como elementos clave',
           'descripcion' => ''
       ]);
       DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(9, 40, 0, 'America/Mexico_City'),
           'titulo'      => 'Agricultura sustentable: blue number initiative',
           'descripcion' => ''
       ]);
       DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(9, 40, 0, 'America/Mexico_City'),
           'titulo'      => 'Información para el consumidor: tecnología y etiquetado',
           'descripcion' => ''
       ]);

        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(10, 35, 0, 'America/Mexico_City'),
           'titulo'      => 'Receso',
           'descripcion' => ''
       ]);


        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(11, 00, 0, 'America/Mexico_City'),
           'titulo'      => 'Innovación e internacionalización',
           'descripcion' => ''
       ]);
        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(11, 00, 0, 'America/Mexico_City'),
           'titulo'      => 'Dos casos exitosos de exportación mexicana: Aguacate y Tequila',
           'descripcion' => ''
       ]);

        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(12, 00, 0, 'America/Mexico_City'),
           'titulo'      => 'Receso',
           'descripcion' => ''
       ]);

        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(12, 30, 0, 'America/Mexico_City'),
           'titulo'      => 'Innovación en la industria',
           'descripcion' => ''
       ]);

        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(13, 40, 0, 'America/Mexico_City'),
           'titulo'      => 'Aperitivo y Comida',
           'descripcion' => ''
       ]);

        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(15, 30, 0, 'America/Mexico_City'),
           'titulo'      => 'Cooperación entre industria y gastronomía para la innovación',
           'descripcion' => ''
       ]);

        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(16, 30, 0, 'America/Mexico_City'),
           'titulo'      => 'Presentación de proyectos de investigación',
           'descripcion' => ''
       ]);

        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(16, 55, 0, 'America/Mexico_City'),
           'titulo'      => 'Receso',
           'descripcion' => ''
       ]);

        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(17, 25, 0, 'America/Mexico_City'),
           'titulo'      => 'Innovación en la experiencia del cliente',
           'descripcion' => ''
       ]);

        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(18, 30, 0, 'America/Mexico_City'),
           'titulo'      => 'Conclusiones y despedida',
           'descripcion' => ''
       ]);

        DB::table('Presentacion')->insert
       ([
           'idBloque'    => 1,
           'hora'        => Carbon::createFromTime(18, 45, 0, 'America/Mexico_City'),
           'titulo'      => 'Coctel de despedida',
           'descripcion' => ''
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