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

        foreach ($empresas as $empresa) 
    	{ 
            DB::table('Empresa')->insert
            ([
                'nombre'      => $empresa,
                'descripcion' => str_random(10),
                'imagen'      => str_random(10)
            ]);
    	}
    }
}
