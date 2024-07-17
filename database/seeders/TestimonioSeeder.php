<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TestimonioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        DB::table('testimonios')->insert([
            'Titulo' => "Legal Compliance",
            'descripcion' => "<p>Somos pioneros en la implementación de un Software especializado en Cumplimiento Normativo, el cual ayudará a la &nbsp;empresa con la implementación de políticas adecuadas para prevenir, detectar y gestionar los riesgos de incumplimiento &nbsp;de las normativas estándares de protección al trabajador, evitando las sanciones y pérdidas financieras. Nuestro &nbsp;Software es una plataforma integral que ofrece la revisión de operaciones, carga de capacitaciones y procesos de la &nbsp;compañía. Asimismo, gestionamos todas las consultas por parte de UIF, creando proyectos sancionadores debido a que &nbsp;es un plataforma que organiza la documentación de la compañía sobre sus sistemas de prevención.</p><p>&nbsp;</p><p>Asimismo, el área de legal compliance se encarga de:</p><p>&nbsp;</p><p>•Implementación de Normas Anticorrupción, Prevención de Lavado de &nbsp;Activos y Financiamiento del Terrorismo.</p><p>•Políticas Antisoborno.</p><p>•Designación del Oficial de Cumplimiento.</p><p>•Implementación del Código de Conducta y de Manual de Ética. &nbsp;Implementación del Sistema de Protección de Datos Personales. &nbsp;Implementación de Políticas de gobernanza</p><p>&nbsp;</p><p><strong>PARTE DE NUESTRA EXPERIENCIA:</strong></p><p>&nbsp;</p><p>Hemos realizado la implementación del sistema de prevención de lavado de activos y financiamiento del terrorismo &nbsp;en más de cuarenta compañías de diversos sectores.</p><p>Realizamos la capacitación en temas de prevención de lavado de activos en más de cuarenta empresas de diversos sectores.</p><p>Hemos capacitaciones a nivel internacional para entidades financieras de Bolivia, en temas de prevención de lavado &nbsp;de activos y financiamiento del terrorismo.</p><p>Nos encargamos de brindar asesoría continua en la revisión de operaciones que podrían ser consideradas sospechosas para diversas compañías.</p>",
            'imagen' => "Compliance.png",
            'ruta_imagen' => "assets/imagen/testimonio/Compliance.png",
            'banner' => "Compliance.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/Compliance.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Corporativo",
            'descripcion' => "<p>Asesoramos a nuestros clientes en procesos de reorganización societaria como fusiones, escisiones y &nbsp;reorganizaciones simples. Realizamos Due Diligence para la adquisición de empresas, negociamos por &nbsp;mandato la adquisición de acciones, y realizamos la valorización de activos. Asimismo, nuestra firma se encarga &nbsp;de brindar asesoría en la constitución de empresas, estructuras de aumento o reducción de capital y &nbsp;determinación de clases de acciones para el ejercicio de derechos societarios.</p><p>&nbsp;</p><p>•Compra y venta de empresas.</p><p>•Constitución de empresas.</p><p>•Fusiones y adquisiciones y reorganizaciones societarias.</p><p>•Reestructuración, disolución, liquidación y/o extinción.</p><p>•Constitución de Joint Venture, consorcios, holdings, subsidiarias y sucursales.</p><p>&nbsp;</p><p><strong>PARTE DE NUESTRA EXPERIENCIA:</strong></p><p>&nbsp;</p><p>Asesoramiento al grupo educativo con mayor reconocimiento en América Latina para la reorganización &nbsp;societaria de todo su grupo societario, lo que fue una de las operaciones más importantes en ese sector. &nbsp;</p><p>Asesoramos al grupo de salud más importante en el país en la reorganización múltiple para la consolidación &nbsp;de sus vehículos empresariales.</p><p>Asesoramos en la estructuración corporativa de una multinacional dedicada a la comercialización de café. &nbsp;Nos encargamos de la reorganización múltiple de un grupo inmobiliario, con la finalidad de realizar una &nbsp;locación adecuada de sus inversiones.</p><p>Asesoramos en la constitución de un fondo de inversión inglés y la creación de un fondo de inversión con patrimonio local.</p>",
            'imagen' => "Corporativo.png",
            'ruta_imagen' => "assets/imagen/testimonio/Corporativo.png",
            'banner' => "Corporativo.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/Corporativo.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Fusiones y Adquisiciones",
            'descripcion' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>&nbsp;</p><p>Nulla facilisi. Maecenas aliquet, nisl id varius ultricies, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc.</p><p>&nbsp;</p><ul><li>•Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>•Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li><li>•Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</li><li>•Donec eu libero sit amet quam egestas semper.</li><li>•Aenean ultricies mi vitae est.</li></ul><p>&nbsp;</p><p><strong>LOREM IPSUM:</strong></p><p>&nbsp;</p><p>Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p><p>&nbsp;</p><p>This Lorem Ipsum text maintains a similar structure to the original, including bullet points and a bolded section header. You can adjust the length or structure as needed for your specific use case.</p><ul><li>&nbsp;</li></ul>",
            'imagen' => "Funsiones_y_Adquisciones.png",
            'ruta_imagen' => "assets/imagen/testimonio/Funsiones_y_Adquisciones.png",
            'banner' => "Funsiones_y_Adquisciones.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/Funsiones_y_Adquisciones.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Derecho Financiero",
            'descripcion' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>&nbsp;</p><p>Nulla facilisi. Maecenas aliquet, nisl id varius ultricies, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc.</p><p>&nbsp;</p><ul><li>•Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>•Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li><li>•Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</li><li>•Donec eu libero sit amet quam egestas semper.</li><li>•Aenean ultricies mi vitae est.</li></ul><p>&nbsp;</p><p><strong>LOREM IPSUM:</strong></p><p>&nbsp;</p><p>Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p><p>&nbsp;</p><p>This Lorem Ipsum text maintains a similar structure to the original, including bullet points and a bolded section header. You can adjust the length or structure as needed for your specific use case.</p><ul><li>&nbsp;</li></ul>",
            'imagen' => "Fondos de Inversion.png",
            'ruta_imagen' => "assets/imagen/testimonio/Fondos de Inversion.png",
            'banner' => "Fondos_de_Inversion.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/Fondos_de_Inversion.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Precios de Transferencia",
            'descripcion' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>&nbsp;</p><p>Nulla facilisi. Maecenas aliquet, nisl id varius ultricies, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc.</p><p>&nbsp;</p><ul><li>•Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>•Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li><li>•Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</li><li>•Donec eu libero sit amet quam egestas semper.</li><li>•Aenean ultricies mi vitae est.</li></ul><p>&nbsp;</p><p><strong>LOREM IPSUM:</strong></p><p>&nbsp;</p><p>Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p><p>&nbsp;</p><p>This Lorem Ipsum text maintains a similar structure to the original, including bullet points and a bolded section header. You can adjust the length or structure as needed for your specific use case.</p><ul><li>&nbsp;</li></ul>",
            'imagen' => "Precios_de_Transferencia.png",
            'ruta_imagen' => "assets/imagen/testimonio/Precios_de_Transferencia.png",
            'banner' => "Precios_de_Transferencia.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/Precios_de_Transferencia.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Laboral",
            'descripcion' => "<p>Nuestra práctica laboral es reconocida por nuestros clientes por la experiencia del equipo y la capacidad de &nbsp;desarrollar un planeamiento laboral eficiente para el cumplimiento formal de las obligaciones.</p><p>&nbsp;</p><p>•Revisión de cálculo de planillas. Asesoría en contratación laboral y diseño de estructuras de eficiencia laboral.</p><p>•Planificación remunerativa y cumplimiento de obligaciones laborales.</p><p>•Revisión de cálculo de planillas.</p><p>•Determinación de impuestos en aspectos laborales, asesoría en procesos de fiscalización laboral.</p><p>•Realización de Due Diligence Laboral.</p><p>•Revisión de políticas de seguridad y salud en el trabajo, implementación de políticas de igualdad salarial.</p><p>•Implementación y estructuración de protocolos de reactivación Covid-19.</p><p>•Asesoría en la contratación de trabajadores extranjeros y obtención de su calidad migratoria.</p><p>•Elaboración y revisión de reglamento interno, políticas de vacaciones, descansos médicos, horas extras.</p><p>&nbsp;</p><p><strong>PARTE DE NUESTRA EXPERIENCIA:</strong></p><p>&nbsp;</p><p>Asesoramos a más de 40 compañías en la presentación de solicitudes de suspensión perfecta, obteniendo &nbsp;el 100% de aprobación en las mismas.</p><p>Asesoramos en el proceso de desvinculación de más de 150 trabajadores, a través de un proceso de &nbsp;negociación directa con cada uno de ellos, pudiendo obtener el resultado esperado por nuestros clientes. &nbsp;Realización del due diligence laboral para un grupo de universidades y estudios superiores del Perú.</p><p>Hemos elaborado diversos proyectos de leyes para instituciones del sector público para proponer &nbsp;incentivos laborales en el sector fintech.</p><p>Brindamos asesoría legal continua a industrias dedicadas a la salud, restaurants, producción agrícola, entre otros.</p><p>&nbsp;</p>",
            'imagen' => "Laboral.png",
            'ruta_imagen' => "assets/imagen/testimonio/Laboral.png",
            'banner' => "Laboral.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/Laboral.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Migratorio",
            'descripcion' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>&nbsp;</p><p>Nulla facilisi. Maecenas aliquet, nisl id varius ultricies, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc.</p><p>&nbsp;</p><ul><li>•Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>•Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li><li>•Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</li><li>•Donec eu libero sit amet quam egestas semper.</li><li>•Aenean ultricies mi vitae est.</li></ul><p>&nbsp;</p><p><strong>LOREM IPSUM:</strong></p><p>&nbsp;</p><p>Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p><p>&nbsp;</p><p>This Lorem Ipsum text maintains a similar structure to the original, including bullet points and a bolded section header. You can adjust the length or structure as needed for your specific use case.</p><ul><li>&nbsp;</li></ul>",
            'imagen' => "Migratorio.png",
            'ruta_imagen' => "assets/imagen/testimonio/Migratorio.png",
            'banner' => "Migratorio.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/Migratorio.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Inmobiliario",
            'descripcion' => "<p>Nuestra Firma se encarga de realizar estudio de titulos, negociación, compra y regularización de inmuebles, &nbsp;tanto de predios urbanos como rurales, así como cambio de zonificación, procesos de acumulación, división, &nbsp;saneamiento de linderos, superposición de tierras, entre otros.</p><p>&nbsp;</p><p>•Estudio de titulos registrales. &nbsp;</p><p>•Estudio de titulos en catastro.</p><p>•&nbsp; Procesos de superposición, acumulación, división y partición.</p><p>•&nbsp; Prescripción adquisitiva de dominio.</p><p>•Rectificación y delimitación de áreas y linderos.</p><p>•&nbsp; Independización de predios urbanos o agrícolas.</p><p>•&nbsp; Peritajes.</p><p>•&nbsp; Compraventa de inmuebles.</p><p>&nbsp;</p><p><strong>PARTE DE NUESTRA EXPERIENCIA:</strong></p><p>&nbsp;</p><p>Habilitación urbana para uno de los grupos industriales con alta presencia en el mercado peruano, dedicada &nbsp;a la producción textil, cerámicos y químicos.</p><p>Adquisición y acumulación de cuatro propiedades en San Isidro, para el desarrollo de un proyecto inmobiliario en Lima.</p><p>Asesoría para una importante inmobiliaria en la negociación de un fideicomiso de ﬂujos para el desarrollo &nbsp;de un proyecto inmobiliario en Santiago de Surco.</p><p>Estructuración de un proyecto inmobiliario que implicaba la renegociación con fondos de inversión y la reestructuración de deuda con terceros, para su adecuado ajuste.</p><p>Estudio de titulos de diversas propiedades en la franja de la costa verde, para la realización de un proyecto inmobiliario, la misma que implicaba el determinar el poder reajustar el uso de la zona.</p><p>&nbsp;</p>",
            'imagen' => "Inmobiliario.png",
            'ruta_imagen' => "assets/imagen/testimonio/Inmobiliario.png",
            'banner' => "Inmobiliario.png",
            'ruta_banner' => "assets/imagen/testimonio/banner/Inmobiliario.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Administrativo",
            'descripcion' => "<p>Nuestra Firma brinda asesoría a nuestros clientes en los procedimientos administrativos con entidades públicas &nbsp;y sectores regulados como Ministerios, Municipios y organismos reguladores para la obtención de permisos, &nbsp;licencias, autorizaciones, de sus actividades comerciales. Nuestra práctica es reconocida por su experiencia en:</p><p>&nbsp;</p><ul><li>•Trámites y seguimiento ante la administración pública. &nbsp;</li><li>•Obtención de licencias, permisos y/o autorizaciones.</li><li>•Asesoría en temas de protección al consumidor y competencia. &nbsp;Asesoría en la elaboración de quejas, reclamos y recursos impugnativos. &nbsp;Contrataciones con el estado.</li><li>•Elaboración de propuestas de contratación.</li><li>•Negociación de contratos.</li><li>•Impugnación de procesos, entre otros aspectos.</li></ul><p>&nbsp;</p><p><strong>PARTE DE NUESTRA EXPERIENCIA:</strong></p><p>&nbsp;</p><p>Obtención de reducción de tasas cobradas por una entidad pública del estado peruano para clientes del &nbsp;sector agrícola, promoviendo una reforma del TUPA de dicha entidad.</p><p>Participación en la Comisión para la detección de las barreras burocráticas existentes en distintas entidades. &nbsp;</p><p>Optimización de la estrategia de respuesta a reclamos del consumidor para una reconocida cadena de fast &nbsp;food, reduciendo los tiempos de atención logrando evitar multas que van desde las 3 UIT hasta 10 UIT &nbsp;frente a Indecopi.</p><p>Designación de un oficial de cumplimiento corporativo para 10 empresas en este último período del año.</p>",
            'imagen' => "Administrativo.png",
            'ruta_imagen' => "assets/imagen/testimonio/Administrativo.png",
            'banner' => "Administrativo.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/Administrativo.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Protección de Datos Personales",
            'descripcion' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>&nbsp;</p><p>Nulla facilisi. Maecenas aliquet, nisl id varius ultricies, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc.</p><p>&nbsp;</p><ul><li>•Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>•Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li><li>•Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</li><li>•Donec eu libero sit amet quam egestas semper.</li><li>•Aenean ultricies mi vitae est.</li></ul><p>&nbsp;</p><p><strong>LOREM IPSUM:</strong></p><p>&nbsp;</p><p>Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p><p>&nbsp;</p><p>This Lorem Ipsum text maintains a similar structure to the original, including bullet points and a bolded section header. You can adjust the length or structure as needed for your specific use case.</p><ul><li>&nbsp;</li></ul>",
            'imagen' => "Datos_Personales.png",
            'ruta_imagen' => "assets/imagen/testimonio/Datos_Personales.png",
            'banner' => "Datos_Personales.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/Datos_Personales.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Protección al Consumidor",
            'descripcion' => "<p>Nuestra Asesoría en Protección al Consumidor se centra en los diferentes procedimientos para gestionar los reclamos que se presenten ante la compañía; así como, los reclamos y denuncias que se presenten ante Indecopi. Los procedimientos se efectúan de manera ágil, empática, y con el conocimiento y experiencia de nuestros abogados.</p><p>&nbsp;</p><p><strong>CARACTERÍSTICAS:</strong></p><p>&nbsp;</p><p>•Respuesta rápida o agilidad (plazos de vencimiento)</p><p>•En el caso de reclamos por libro de reclamaciones, las respuestas en 5 días aproximadamente, dependiendo del reclamo en particular.</p><p>•Contingencia: ¿Qué pasa si no atiendo un reclamo correcta y oportunamente? Daño Económico 10 UIT&nbsp; y Daño Reputacional (Indecopi de oficio puede realizar visitas).</p><p>•En el caso de reclamos a Indecopi, las respuestas dentro de las 24 horas.</p><p>•En el caso de las denuncias ante Indecopi, las respuestas en 5 días, dependiendo de los hechos denunciados.</p><p>&nbsp;</p><p><strong>ASESORÍA:</strong></p><p>&nbsp;</p><p>3 Estructuración y planteamiento de la estrategia de defensa del reclamo</p><p>4 Asesoría Legal en procedimientos administrativos ante Indecopi</p><p>5 Recursos administrativos de impugnación</p><p>1 Implementación del libro de reclamaciones</p><p>2 Elaboración de protocolo de atención de reclamos. Implementar diferentes canales para atender los reclamos.</p><p>&nbsp;</p>",
            'imagen' => "Proteccion_al_consumidor.png",
            'ruta_imagen' => "assets/imagen/testimonio/Proteccion_al_consumidor.png",
            'banner' => "Proteccion_al_consumidor.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/Proteccion_al_consumidor.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Propiedad Intelectual",
            'descripcion' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>&nbsp;</p><p>Nulla facilisi. Maecenas aliquet, nisl id varius ultricies, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc.</p><p>&nbsp;</p><ul><li>•Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>•Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li><li>•Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</li><li>•Donec eu libero sit amet quam egestas semper.</li><li>•Aenean ultricies mi vitae est.</li></ul><p>&nbsp;</p><p><strong>LOREM IPSUM:</strong></p><p>&nbsp;</p><p>Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p><p>&nbsp;</p><p>This Lorem Ipsum text maintains a similar structure to the original, including bullet points and a bolded section header. You can adjust the length or structure as needed for your specific use case.</p><ul><li>&nbsp;</li></ul>",
            'imagen' => "Marcas_y_Patentes.png",
            'ruta_imagen' => "assets/imagen/testimonio/Marcas_y_Patentes.png",
            'banner' => "Marcas_y_Patentes.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/Marcas_y_Patentes.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Contrataciones con el Estado",
            'descripcion' => "<p>Nuestra área de contrataciones con el Estado es reconocida por realizar un servicio tanto de identificación de procesos &nbsp;de contratación, gestión administrativa y asesoría legal para los procesos de licitación.</p><p>&nbsp;</p><p>•Inscripción en el Registro Nacional de Proveedores.</p><p>•Asesoría en la identificación diaria de procesos de contratación.</p><p>•Asesoría en procedimientos de contratación con el Estado durante la etapa de selección lo cual implica: Elaboración de consultas y/o observaciones, revisión de las bases del procedimiento, elaboración de &nbsp;propuesta técnica económica.</p><p>•Asesoría durante la etapa de ejecución contractual, la cual inicia desde la suscripción</p><p>•del contrato hasta la entrega de la constancia de prestación.</p><p>•Asistencia a reuniones con las entidades contratantes.</p><p>•Asesoría en negociación de términos y condiciones en la ejecución de contratación &nbsp;como adicionales, servicios fuera de contrato, entre otros.</p><p>&nbsp;</p><p><strong>PARTE DE NUESTRA EXPERIENCIA:</strong></p><p>&nbsp;</p><p>La negociación de los procesos de contratación para empresas del sector turismo por montos involucrados superiores a los US$20MM.</p><p>La elaboración de expedientes, revisión de bases y presentación de propuestas para un proceso para la instalación de tuberías de gas por un monto superior a los US$50MM.</p><p>La elaboración del proyecto de ley para la presentación de incentivos en contrataciones con el estado para el sector &nbsp;turismo, encargado por una entidad pública del estado.</p><p>La elaboración del proyecto de ley de incentivos para el sector fintech, enfocado en incentivar la contratación con el &nbsp;estado por parte de inversionistas extranjeros, encargado por una importante entidad pública.</p><p>El patrocinio de empresas del sector turismo para la obtención del reconocimiento del pago de una serie de sumas &nbsp;en un proceso arbitral complejo, logrando la recuperación de una suma superior a los S/. 15MM ante una entidad &nbsp;pública del estado.</p>",
            'imagen' => "Contrataciones_con_el_Estado.png",
            'ruta_imagen' => "assets/imagen/testimonio/Contrataciones_con_el_Estado.png",
            'banner' => "Contrataciones_con_el_Estado.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/Contrataciones_con_el_Estado.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Regulatorio",
            'descripcion' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>&nbsp;</p><p>Nulla facilisi. Maecenas aliquet, nisl id varius ultricies, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc.</p><p>&nbsp;</p><ul><li>•Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>•Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li><li>•Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</li><li>•Donec eu libero sit amet quam egestas semper.</li><li>•Aenean ultricies mi vitae est.</li></ul><p>&nbsp;</p><p><strong>LOREM IPSUM:</strong></p><p>&nbsp;</p><p>Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p><p>&nbsp;</p><p>This Lorem Ipsum text maintains a similar structure to the original, including bullet points and a bolded section header. You can adjust the length or structure as needed for your specific use case.</p><ul><li>&nbsp;</li></ul>",
            'imagen' => "Regulatorio.png",
            'ruta_imagen' => "assets/imagen/testimonio/Regulatorio.png",
            'banner' => "Regulatorio.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/Regulatorio.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Relaciones Gubernamentales",
            'descripcion' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>&nbsp;</p><p>Nulla facilisi. Maecenas aliquet, nisl id varius ultricies, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc.</p><p>&nbsp;</p><ul><li>•Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>•Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li><li>•Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</li><li>•Donec eu libero sit amet quam egestas semper.</li><li>•Aenean ultricies mi vitae est.</li></ul><p>&nbsp;</p><p><strong>LOREM IPSUM:</strong></p><p>&nbsp;</p><p>Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p><p>&nbsp;</p><p>This Lorem Ipsum text maintains a similar structure to the original, including bullet points and a bolded section header. You can adjust the length or structure as needed for your specific use case.</p><ul><li>&nbsp;</li></ul>",
            'imagen' => "Relaciones_Gubernamentales.png",
            'ruta_imagen' => "assets/imagen/testimonio/Relaciones_Gubernamentales.png",
            'banner' => "Relaciones_Gubernamentales.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/Relaciones_Gubernamentales.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Relaciones Sociales",
            'descripcion' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>&nbsp;</p><p>Nulla facilisi. Maecenas aliquet, nisl id varius ultricies, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc.</p><p>&nbsp;</p><ul><li>•Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>•Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li><li>•Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</li><li>•Donec eu libero sit amet quam egestas semper.</li><li>•Aenean ultricies mi vitae est.</li></ul><p>&nbsp;</p><p><strong>LOREM IPSUM:</strong></p><p>&nbsp;</p><p>Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p><p>&nbsp;</p><p>This Lorem Ipsum text maintains a similar structure to the original, including bullet points and a bolded section header. You can adjust the length or structure as needed for your specific use case.</p><ul><li>&nbsp;</li></ul>",
            'imagen' => "Relaciones_sociales.png",
            'ruta_imagen' => "assets/imagen/testimonio/Relaciones_sociales.png",
            'banner' => "Relaciones_sociales.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/Relaciones_sociales.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Seguridad y Salud en el Trabajo",
            'descripcion' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>&nbsp;</p><p>Nulla facilisi. Maecenas aliquet, nisl id varius ultricies, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc. Sed euismod, nunc sit amet aliquam lacinia, nunc nunc tincidunt nunc, vitae aliquam nunc nunc vitae nunc.</p><p>&nbsp;</p><ul><li>•Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>•Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li><li>•Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</li><li>•Donec eu libero sit amet quam egestas semper.</li><li>•Aenean ultricies mi vitae est.</li></ul><p>&nbsp;</p><p><strong>LOREM IPSUM:</strong></p><p>&nbsp;</p><p>Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p><p>&nbsp;</p><p>This Lorem Ipsum text maintains a similar structure to the original, including bullet points and a bolded section header. You can adjust the length or structure as needed for your specific use case.</p><ul><li>&nbsp;</li></ul>",
            'imagen' => "Seguridad_y_Salud_en_el_Trabajo.png",
            'ruta_imagen' => "assets/imagen/testimonio/Seguridad_y_Salud_en_el_Trabajo.png",
            'banner' => "Seguridad_y_Salud_en_el_Trabajo.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/Seguridad_y_Salud_en_el_Trabajo.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Tributario",
            'descripcion' => "<p>Nuestra firma se encarga principalmente de la planificación y optimización fiscal de las empresas e inversiones extranjeras. Somos especialistas en el apoyo en fiscalizaciones desde el primer requerimiento hasta el acercamiento con la administración tributaria.</p><p>&nbsp;</p><p>•Consultoría Tributaria permanente.</p><p>•Apoyo en fiscalizaciones tributarias ante SUNAT o Municipalidades.</p><p>•Apoyo en fiscalizaciones del aporte por regulación ante OEFA u OSINERGMIN.</p><p>•Patrocinio legal en sus procesos tributarios ante SUNAT, Tribunal Fiscal, municipalidades, OEFA, OSINERGMIN, aduanas y además de los procesos judiciales tributarios ante el Poder Judicial (reclamaciones, apelaciones, quejas, demandas contencioso administrativas).</p><p>•Revisiones tributarias de impuestos mensuales y anuales.</p><p>•Revisión de cláusulas tributarias en contratos mineros, así como también otros contratos que contengan cláusulas tributarias.</p><p>•Planeamiento tributario.</p><p>&nbsp;</p><p><strong>PARTE DE NUESTRA EXPERIENCIA:</strong></p><p>&nbsp;</p><p>Conseguimos resultados tributarios/mineros importantes en la industria, como el cobro en exceso de los intereses moratorios en los procedimientos tributarios y la aplicación correcta de la tasa de depreciación de los gastos de desarrollo en proyectos mineros.</p><p>Hemos asesorado a empresas del rubro de minería, retail, textil, agroindustria, inmobiliario, construcción y otros.</p><p>Hemos conseguido elaborar planeamientos tributarios a grandes grupos corporativos.</p>",
            'imagen' => "icon-5.png",
            'ruta_imagen' => "assets/imagen/testimonio/icon-5.png",
            'banner' => "icon-5.jpg",
            'ruta_banner' => "assets/imagen/testimonio/banner/icon-5.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        

       
        
    }
}
