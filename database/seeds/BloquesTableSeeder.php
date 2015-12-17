<?php

use Illuminate\Database\Seeder;

class BloquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloques = ['APERITIVO Y COMIDA',
        			'COCTEL DE DESPEDIDA',
        			'CONCLUSIONES Y DESPEDIDA',
        			'COOPERACIÓN ENTRE INDUSTRIA Y GASTRONOMÍA PARA LA INNOVACIÓN',
        			'ENTORNO ECONÓMICO', 
        			'INNOVACIÓN EN LA CADENA DE VALOR: INFORMACIÓN Y TECNOLOGÍA COMO ELEMENTOS CLAVE',
        			'INNOVACIÓN EN LA EXPERIENCIA DEL CLIENTE',
        			'INNOVACIÓN EN LA INDUSTRIA',
        			'PRESENTACIÓN DE PROYECTOS DE INVESTIGACIÓN',
        			'RECESO, INNOVACIÓN E INTERNACIONALIZACIÓN',
        			'REGISTRO'];

        foreach ($bloques as $bloque) 
        {
        	DB::table('Bloque')->insert
        	([
        		'nombre' => $bloque
        	]);
        }
    }
}
