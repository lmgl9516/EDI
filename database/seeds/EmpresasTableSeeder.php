<?php

use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         *  AB InBev                    [01]
         *  APEAM                       [02]
         *  Basque Culinary Center      [03]
         *  Bühler                      [04]
         *  Cervecería Minerva          [05]
         *  Cervecería Primus           [06]
         *  CNIT                        [07]
         *  Comercial Mexicana          [08]
         *  ConMexico                   [09]
         *  CRT                         [10]
         *  Culinary Art School         [11]
         *  Deloitte                    [12] *** Patrocinador
         *  El Sargazo                  [13]
         *  GS1                         [14] *** Organizador
         *  GS1 México                  [15]
         *  IESE                        [16] *** Organizador
         *  International Trade Centre  [17]
         *  IPADE                       [18] *** Organizador
         *  Nespresso México            [19]
         *  Quintonil                   [20]
         *  SA                          [21] *** Patrocinador
         */

        $empresas = ['AB InBev',
                    'APEAM',
                    'Basque Culinary Center',
                    'Bühler',
                    'Cervecería Minerva',
                    'Cervecería Primus',
                    'CNIT',
                    'Comercial Mexicana',
                    'ConMexico',
                    'CRT',
                    'Culinary Art School',
                    'Deloitte',
                    'El Sargazo',
                    'GS1',
                    'GS1 México',
                    'IESE',
                    'International Trade Centre',
                    'IPADE',
                    'Nespresso México',
                    'Quintonil',
                    'SA'];

        $images  = ['img/logos/ab.png',
                    'img/logos/apeam.png',
                    'img/logos/bcc.jpg',
                    'img/logos/bu.png',
                    'img/logos/minerva.png',
                    'img/logos/primus.jpg',
                    'img/logos/cnit.png',
                    'img/logos/cm.png',
                    'img/logos/conmexico.jpg',
                    'img/logos/crt.png',
                    'img/logos/cas.png',
                    'img/logos/delo.png',
                    'img/logos/sargazo.jpg',
                    'http://placehold.it/300x300',
                    'http://placehold.it/300x300',
                    'http://placehold.it/300x300',
                    'img/logos/itc.png',
                    'http://placehold.it/300x300',
                    'img/logos/nesp.png',
                    'img/logos/quinto.png',
                    'http://placehold.it/300x300'];

        $index = 0;

        foreach ($empresas as $empresa) 
    	{ 
            DB::table('Empresa')->insert
            ([
                'nombre'      => $empresa,
                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'imagen'      => $images[$index++]
            ]);
    	}

        $patrocinadores = [12, 21];
        $organizadores  = [14, 16, 18];

        foreach ($patrocinadores as $patrocinador) 
        { 
            DB::table('Patrocinio')->insert
            ([
                'idEmpresa' => $patrocinador
            ]);
        }

        foreach ($organizadores as $organizador) 
        { 
            DB::table('Organizador')->insert
            ([
                'idEmpresa' => $organizador
            ]);
        }
    }
}
