<?php

use Illuminate\Database\Seeder;

class cCompany
{
    public $aName;
    public $aLogo;

    public function __construct($pName, $pLogo) 
    {
        $this->aName = $pName;
        $this->aLogo = $pLogo;
    }
}

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresas = [ new cCompany('AB InBev',                   'img/logos/empresas/ab-inbev.png'),
                      new cCompany('APEAM',                      'img/logos/empresas/apeam.png'),
                      new cCompany('Basque Culinary Center',     'img/logos/empresas/basque-culinary-center.jpg'),
                      new cCompany('Bühler',                     'img/logos/empresas/buhler.png'),
                      new cCompany('Cervecería Minerva',         'img/logos/empresas/cerveceria-minerva.png'),
                      new cCompany('Cervecería Primus',          'img/logos/empresas/cerveceria-primus.jpg'),
                      new cCompany('CNIT',                       'img/logos/empresas/cnit.png'),
                      new cCompany('Comercial Mexicana',         'img/logos/empresas/comercial-mexicana.png'),
                      new cCompany('ConMexico',                  'img/logos/empresas/conmexico.jpg'),
                      new cCompany('CRT',                        'img/logos/empresas/crt.png'),
                      new cCompany('Culinary Art School',        'img/logos/empresas/culinary-art-school.png'),
                      new cCompany('Deloitte',                   'img/logos/empresas/deloitte.png'),
                      new cCompany('El Sargazo',                 'img/logos/empresas/el-sargazo.jpg'),
                      new cCompany('GS1',                        'img/logos/empresas/gs1.png'),
                      new cCompany('GS1 México',                 'img/logos/empresas/gs1-mexico.png'),
                      new cCompany('IESE',                       'img/logos/empresas/iese.png'),
                      new cCompany('International Trade Centre', 'img/logos/empresas/int-trade-centre.png'),
                      new cCompany('IPADE',                      'img/logos/empresas/ipade.png'),
                      new cCompany('Nespresso México',           'img/logos/empresas/nespresso.png'),
                      new cCompany('PA',                         'img/logos/empresas/pa.png'),
                      new cCompany('Quintonil',                  'img/logos/empresas/quintonil.png')];

        foreach ($empresas as $empresa) 
    	{ 
            DB::table('Empresa')->insert
            ([
                'nombre'      => $empresa->aName,
                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'imagen'      => $empresa->aLogo
            ]);
    	}

        $patrocinadores = [12, 20];
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
