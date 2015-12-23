<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class cCompany
{
    public $aName;
    public $aLogo;
    public $aDescripcion;

    public function __construct($pName, $pLogo, $pDescripcion) 
    {
        $this->aName = $pName;
        $this->aLogo = $pLogo;
        $this->aDescripcion = $pDescripcion;
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
        $empresas = [ new cCompany('AB InBev',                   'img/logos/empresas/ab-inbev.png', 'Anheuser-Busch InBev empresa multinacional belgo-brasileña, con sedes en Lovaina, Bélgica y São Paulo, Brasil. Compañía cervecera líder a nivel mundial. Se encuentra dentro del top 5 de empresas de bienes de consumo, tiene operaciones en 24 países y cuenta con un portafolio de más de 200 marcas. Produce cervezas como Budweiser, Stella Artois, Beck’s, Leffe, Hoegaarden, Bud Light, Skol, Brahma, Antarctica, Quilmes, Michelob Ultra, Harbin, Sedrin, Klinskoye, Sibirskaya Korona, Chernigivske, Hasseröder y Jupiler. Además de algunas cervezas mexicanas como Corona Extra, Negra Modelo y Modelo Especial.'),
                      new cCompany('APEAM',                      'img/logos/empresas/apeam.png', 'Asociación de Productores y Empacadores Exportadores de Aguacate de México A.C., la cual fue fundada en el año 1997.
Actualmente esta constituida por más de 12,000 productores y 40 empresas empacadoras exportadoras a Estados Unidos. Todos cuentan con la certificación de las autoridades de ambos países. Nuestra tarea es la de organizar a ambos sectores, el Productor y el Empacador, para hacer posible la exportación de un producto de clase mundial, como lo es nuestro aguacate. Hoy gracias a APEAM, los mercados internacionales pueden tener acceso directo al delicioso producto, con la absoluta seguridad de que están adquiriendo fruta fresca, deliciosa y nutritiva; que cumple con los más altos estándares de calidad, así como de sanidad, aunado a las normas de exportación más exigentes. APEAM mantiene de manera permanente representantes en Nueva York, Chicago y en el sur de Texas.
'),
                      new cCompany('Basque Culinary Center',     'img/logos/empresas/basque-culinary-center.jpg', 'Institución académica pionera a nivel mundial, creada por siete de los mejores chefs vascos junto con Mondragon Unibertsitatea, y con la implicación de once de los chefs más influyentes del mundo. En Basque Culinary Center tenemos como fin la formación superior, la investigación, innovación y promoción de la gastronomía y la alimentación.
Desde nuestra creación, en septiembre 2011, trabajamos para ser el referente a nivel internacional en esta materia y también para impulsar la gastronomía como palanca de desarrollo socioeconómico a través de la Facultad de Ciencias Gastronómicas y el Centro de Investigación e innovación. Desarrollamos también numerosas actividades de promoción.
'),
                      new cCompany('Bühler',                     'img/logos/empresas/buhler.png', 'Cada día, miles de millones de personas emplean las tecnologías de Bühler para satisfacer sus necesidades básicas de alimentación, movilidad o comunicaciones. Con nuestras soluciones y tecnologías de procesos industriales realizamos una importante contribución a la alimentación de la población mundial, sin perder de vista la seguridad y la sanidad alimentarias. Aproximadamente un 65 % de la cosecha mundial de trigo se procesa en molinos Bühler para la obtención de harina. La contribución de la empresa a la producción y el procesamiento globales de arroz, pasta, chocolate, y cereales para desayuno es igualmente importante. Asimismo, Bühler es proveedor líder en soluciones basadas en tecnologías de fundición a presión, molturación húmeda y recubrimiento de superficies, centrándose en aplicaciones tecnológicas de automoción, óptica, electrónica, impresión, embalaje y vidrio. Las soluciones para estas industrias se caracterizan por su eficiencia energética y su sostenible movilidad. Como grupo tecnológico líder, Bühler invierte hasta el 5 % anual de su volumen de negocios en investigación y desarrollo. Bühler se enorgullece de su procedencia suiza, con 10 600 empleados en alrededor de 140 sedes y un volumen de ventas de 2300 millones de francos suizos. Como empresa familiar, Bühler se siente especialmente comprometido con la sostenibilidad.'),
                      new cCompany('Cervecería Minerva',         'img/logos/empresas/cerveceria-minerva.png', 'Empresa orgullosamente mexicana, nace en el corazón de Jalisco con la intención de distinguirse por producir cervezas altamente especializadas a un precio justo. Nuestra línea de cervezas 100% malta se caracteriza tanto por el riguroso proceso artesanal con el que son fabricadas, como por la calidad suprema de sus ingredientes. Nuestras cervezas de carácter firme, aroma agradable y textura regia son cuidadosamente diseñadas para ofrecer a nuestros consumidores experiencias finas de sabor y a nuestros clientes negocios rentables y de largo de plazo.'),
                      new cCompany('Cervecería Primus',          'img/logos/empresas/cerveceria-primus.jpg', 'Cervecería Primus nace con el ideal de fomentar en México una cultura cervecera, promoviendo y elaborando estilos de cervezas aun no difundidos o producidos en nuestro país. Producimos cervezas artesanales, orgullosamente mexicanas, elaboradas con maltas de especialidad, finos lúpuos y cepas selectas de levadura; características esenciales de una cerveza Premium.'),
                      new cCompany('CNIT',                       'img/logos/empresas/cnit.png', 'La CNIT tiene el objetivo de representar, promover y defender los intereses comunes de sus asociados, proponiendo y llevando a cabo las acciones que satisfagan sus necesidades y expectativas para fortalecer el prestigio e imagen de la Industria Tequilera en general y del Tequila en particular. La CNIT es la institución más antigua de la Industria Tequilera a la cual las empresas asociadas se afilian libre y voluntariamente para trabajar de la mano en pro del Tequila, patrimonio de México.'),
                      new cCompany('Comercial Mexicana',         'img/logos/empresas/comercial-mexicana.png', 'Tiendas Comercial Mexicana S.A. de C.V. es una unidad de negocios de Controladora Comercial Mexicana. Es una compañía dedicada a operar cadenas de tiendas de autoservicio y mercancías generales a través de tres formatos: Comercial Mexicana con 53 tiendas, Bodega Comercial Mexicana con 43 tiendas, enfocada a los segmentos de población con menor poder adquisitivo, y Mega con 82 tiendas.'),
                      new cCompany('ConMexico',                  'img/logos/empresas/conmexico.jpg', 'El Consejo Mexicano de la Industria de Productos de Consumo fue fundado en 1996 por diez empresas líderes en la industria de alimentos, bebidas y productos de consumo en el país y en el mundo. ConMéxico surgió para promover el bienestar del consumidor, establecer y desarrollar vínculos con el comercio y los proveedores que fortalezcan a la industria de productos de consumo y, así, contribuir al desarrollo económico y social del país. Actualmente ConMéxico agrupa a 44 empresas de las industrias textil, de alimentos, bebidas, productos para el hogar y productos para el cuidado personal.'),
                      new cCompany('CRT',                        'img/logos/empresas/crt.png', ' El CRT es la organización dedicada a verificar y certificar el cumplimiento con la Norma Oficial del Tequila, así como a promover la calidad, la cultura y el prestigio de la bebida nacional por excelencia.
Se trata de una institución interprofesional donde se reúnen, desde el 16 de Diciembre de 1993, todos los actores y agentes productivos ligados a la elaboración del Tequila. El objetivo es promover la cultura y la calidad de esta bebida, la cual se ha ganado un lugar importante entre los símbolos de identidad nacional.
El CRT procura el prestigio del Tequila por medio de la investigación y estudios especializados. De esta manera difunde todos los elementos que le confieren valor y recrean su cultura.
'),
                      new cCompany('Culinary Art School',        'img/logos/empresas/culinary-art-school.png', 'Somos una Escuela Superior de Arte Culinario única en su tipo en la ciudad de Tijuana y Baja California.
Basado en un Sistema Modular de Inmersión Especializada que favorece el desarrollo de habilidades y destrezas, la formación de hábitos y organización en nuestros educandos a través de un proceso pedagógico de alto rendimiento y proyectado en un modelo de enseñanza “aprender–haciendo”, mediante talleres con elevado contenido práctico.
'),
                      new cCompany('Deloitte',                   'img/logos/empresas/deloitte.png', 'Deloitte es la marca bajo la cual decenas de miles de profesionales comprometidos en firmas independientes alrededor del mundo, colaboran para otorgar servicios de auditoría, consultoría, asesoría financiera, administración de riesgos y servicios fiscales para sus clientes. Estas firmas son miembro de Deloitte Touche Tohmatsu Limited (DTTL), sociedad privada limitada por garantía en el Reino Unido.'),
                      new cCompany('El Sargazo',                 'img/logos/empresas/el-sargazo.jpg', 'Es una empresa mexicana integrada por un grupo de jóvenes emprendedores. Estamos dedicados a localizar ingredientes de calidad mundial, principalmente mexicanos, promoviendo en primer lugar las grandes riquezas que nos ofrecen los mares de Baja California. Hacemos llegar estos productos de gran calidad y frescura a los establecimientos gastronómicos mas exigentes del país, enfocando nuestros esfuerzos al desarrollo de logística y servicio al cliente.
Aparte de buscar la satisfacción de nuestros clientes, es una prioridad el bienestar de todo nuestro equipo de trabajo y la sustentabilidad de nuestra actividad.
'),
                      new cCompany('GS1',                        'img/logos/empresas/gs1.png', 'GS1 cree en el poder de los estándares para transformar la manera en que trabajamos y vivimos.
Creamos una base común para los negocios relacionados con el mercado del retail, con la identificación única, la captura precisa y la compartición automática de información de productos, locaciones y activos. Facilitamos la visibilidad a través del intercambio de información auténtica. Impulsamos al comercio electrónico en el país y a los negocios a crecer y mejorar su eficiencia, seguridad y sostenibilidad.
'),
                      new cCompany('GS1 México',                 'img/logos/empresas/gs1-mexico.png', 'GS1 cree en el poder de los estándares para transformar la manera en que trabajamos y vivimos.
Creamos una base común para los negocios relacionados con el mercado del retail, con la identificación única, la captura precisa y la compartición automática de información de productos, locaciones y activos. Facilitamos la visibilidad a través del intercambio de información auténtica. Impulsamos al comercio electrónico en el país y a los negocios a crecer y mejorar su eficiencia, seguridad y sostenibilidad.
'),
                      new cCompany('IESE',                       'img/logos/empresas/iese.png', 'Durante más de cincuenta años, el IESE, la escuela de dirección de empresas de la Universidad de Navarra, ha permanecido a la cabeza en la formación de directivos, desarrollando e inspirando a líderes empresariales cuyo objetivo es generar un impacto profundo, positivo y duradero en las personas, las empresas y la sociedad a la que sirven.
El éxito del IESE reside en el enfoque humanístico que imprime en el liderazgo y los negocios, complementado con un claustro de reconocimiento mundial dedicado a generar investigaciones de vanguardia; el alcance global de los programas que ofrecemos, del claustro, de los estudiantes y de los campus; una metodología práctica y relevante de aprendizaje y una creciente comunidad de antiguos alumnos compuesta por más de 40.000 directivos en todo el mundo preparados para afrontar los retos actuales y liderar las empresas en el futuro.
'),
                      new cCompany('International Trade Centre', 'img/logos/empresas/int-trade-centre.png', 'El Centro de Comercio Internacional (ITC) es la agencia conjunta de la Organización Mundial del Comercio y de las Naciones Unidas. Nuesto objetivo es que las empresas en países en desarrollo sean más competitivas en el mercado global, acelerando el desarrollo económico y ayudando a conseguir los Objetivos de desarrollo del milenio de las Naciones Unidas.'),
                      new cCompany('IPADE',                      'img/logos/empresas/ipade.png', 'El Instituto Panamericano de Alta Dirección de Empresa (IPADE Business School) es la escuela de negocios de la Universidad Panamericana (UP). Fue fundado en 1967 por prominentes empresarios con el objetivo de formar líderes en la Alta Dirección mediante una propuesta académica innovadora, enfoque global de los negocios, responsabilidad social y en apego a los principios cristianos, con el ánimo de transformar positivamente a las organizaciones de todos los sectores, y a la sociedad en general.
El IPADE promueve el diálogo internacional, por lo que ha establecido convenios con reconocidas instituciones académicas homólogas en otros países. Asimismo, cuenta con la acreditación de la Association to Advance Collegiate Schools of Business (AACSB) y es miembro de diversos organismos internacionales.
'),
                      new cCompany('Nespresso México',           'img/logos/empresas/nespresso.png', 'Nespresso es la marca comercial de la compañía Nestlé Nespresso SA, perteneciente al Grupo Nestlé y con sede en Suiza. Sus productos están basados en un sistema de cápsulas individuales que contienen café molido y máquinas específicas que sean capaces de producir el café a partir del contenido de la cápsula. Nespresso cuenta con un modelo doméstico y un modelo especializado para clientes especiales como oficinas u hoteles.'),
                      new cCompany('PA',                         'img/logos/empresas/pa.png', 'null'),
                      new cCompany('Quintonil',                  'img/logos/empresas/quintonil.png', 'Ubicado en Polanco y liderado por la mancuerna conformada por Jorge Vallejo –joven chef mexicano con una sólida trayectoria y un amplio reconocimiento a su trabajo-, y por Alejandra Flores –con gran experiencia en el ámbito de la restauración quien atiende personalmente a los clientes en la sala, Quintonil ofrece una propuesta gastronómica que expresa con claridad los sabores y las formas de la cocina mexicana moderna, desde la plataforma de un restaurante que integra a la perfección la dinámica de cocina y servicio. Además de una visión contemporánea de la gastronomía nacional.')];

        foreach ($empresas as $empresa) 
    	{ 
            DB::table('Empresa')->insert
            ([
                'nombre'      => $empresa->aName,
                'descripcion' => $empresa->aDescripcion,
                'imagen'      => $empresa->aLogo
            ]);
    	}

        $patrocinadores = [12, 20];
        $organizadores  = [14, 16, 18];

        foreach ($patrocinadores as $patrocinador) 
        { 
            DB::table('Patrocinador')->insert
            ([
                'idEmpresa' => $patrocinador,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        foreach ($organizadores as $organizador) 
        { 
            DB::table('Organizador')->insert
            ([
                'idEmpresa' => $organizador,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
