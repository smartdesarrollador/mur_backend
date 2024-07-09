<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        $descripcion = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet. Sed faucibus lectus quam, a vulputate ligula ullamcorper ac. Sed nec odio a leo hendrerit varius. Mauris vel orci at ipsum ultricies laoreet. Sed eget lectus at lectus laoreet lobortis.</p><p>&nbsp;</p><p><strong>Lorem Ipsum Dolor Sit Amet</strong></p><p>&nbsp;</p><p><strong>Pre-requisitos:</strong></p><p>&nbsp;</p><ul><li>Conocimientos de manejo de datos y/o excel básico.</li><li>&nbsp;</li></ul><p><strong>Objetivo General:</strong></p><p>&nbsp;</p><ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>&nbsp;</li></ul><p><strong>Objetivos Específicos:</strong></p><ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>&nbsp;</li></ul><p><strong>Resumen del contenido:</strong></p><ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>&nbsp;</li></ul><p><strong>Please note:</strong></p><ul><li>I have replaced all specific text with generic Lorem ipsum text.</li><li>I have kept the headings and subheadings the same.</li><li>I have kept the bullet points and list structure the same.</li></ul><p>I hope this is helpful! Let me know if you have any other questions.</p>";

        DB::table('productos')->insert([
            'nombre' => "Erick Valderrama",
            'resumen' => "Erick Valderrama es Socio Director del estudio, y lidera las prácticas en Derecho Corporativo, Laboral, Contrataciones con el Estado y Compliance. Es el responsable del Desarrollo de Estructuras de Inversión y ha sido el asesor principal de más de 90 empresas extranjeras en el país.",
            'descripcion' => "<p><strong>Labores académicas</strong></p><p>&nbsp;</p><ul><li>Es docente del curso de Sociedades Anónimas en la Facultad de Derecho de la Pontificia Universidad Católica del Perú, y jurado recurrente de exámenes de grado de Derecho societario en la misma casa de estudios. Erick también ha sido designado como coordinador de eventos en temas societarios de diversas revistas de derecho y es expositor frecuente en conferencias.</li><li>&nbsp;</li></ul><p><strong>Educación</strong></p><p>&nbsp;</p><ul><li>•Abogado de la Pontificia Universidad de Católica del Perú.</li><li>•Con un MBA de la Universidad Rey Juan Carlos de España y Master Executive del Instituto Europeo de la Empresa.</li><li>•Certificado como Director Independiente en el programa MDD11 de Centrum Católica</li><li>•Con curso de especialización en el Marco General de Compliance por la Pontificia Universidad Católica del Perú.</li><li>•Con curso de especialización en Tendencias y Desafíos Contemporáneos en Libre Competencia por la Pontificia Universidad Católica del Perú.</li><li>&nbsp;</li></ul><p>&nbsp;</p>",
            'correo' => "evalderrama@evv.pe",
            'telefono' => "987703743",
            'imagen' => "socio_1.jpg",
            'ruta_imagen' => "assets/imagen/producto/socio_1.jpg",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Fabiola Ruiz",
            'resumen' => "Fabiola Ruiz cuenta con una amplia experiencia en Derecho Laboral-Tributario y Derecho Laboral. En su ejercicio profesional ha sido la encargada de diversos planeamientos laborales, trabajando con empresas tales como McDonalds, UPC, KWS, Grupo EFE, entre otros.",
            'descripcion' => "<p>Asimismo, ha sido parte integrante de proyectos de implementación de normas de cumplimiento laboral y due diligence en compañías con más de mil (1,000) trabajadores, tanto en compañías del régimen general como de regímenes especiales. También ha liderado reestructuraciones salariales de compañías de distintos sectores, implementado políticas de igualdad salarial y asesoría en procesos de fiscalización en entidades como SUNAFIL, MTPE y SUNAT.&nbsp;&nbsp;</p><p>&nbsp;</p><p><strong>Labores académicas</strong></p><p>&nbsp;</p><ul><li>•Fabiola dicta capacitaciones en materia de obligaciones laborales en las compañías clientes y también participa con sus aportes en notas de prensa.</li><li>&nbsp;</li></ul><p><strong>Formación</strong></p><p>&nbsp;</p><ul><li>•Abogada por la Universidad de Piura – Campus Lima</li><li>•Curso de Actualización en Relaciones Laborales Empresariales dictado por la Pontificia Universidad Católica del Perú.</li><li>•Ha participado en cursos de Implementación del Home Office y Relaciones laborales y COVID-19.</li><li>•Forma parte del Programa de Alta Especialización en Derecho Laboral Empresarial de la Universidad ESAN, programa que cuenta con la certificación de ESAN Graduate School of Business, la Universidad ESAN y la Universidad de Chile.</li><li>&nbsp;</li></ul>",
            'correo' => "fruiz@evv.pe",
            'telefono' => "984784011",
            'imagen' => "socio_2.jpg",
            'ruta_imagen' => "assets/imagen/producto/socio_2.jpg",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Carlos Enríquez",
            'resumen' => "Carlos Enríquez es Gerente del área de Derecho Corporativo y Financiero. Ha brindado asesoría contractual y societaria a numerosas empresas nacionales y extranjeras, liderando operaciones de fusiones, escisiones, redomicilio de sociedades extranjeras, procedimientos de disolución y liquidación, establecimiento de sucursales y estructuración de fondos de inversión privados.",
            'descripcion' => "<p><strong>Labores académicas</strong></p><p>&nbsp;</p><ul><li>Fue profesor adjunto del Curso “Sociedades Anónimas” en la Pontificia Universidad Católica del Perú. Asimismo, se desempeña como expositor en programas de capacitación y dictado de cursos en materia de&nbsp; Derecho Societario.</li><li>&nbsp;</li></ul><p><strong>Formación</strong></p><p>&nbsp;</p><ul><li>•Abogado por la Universidad Nacional Mayor de San Marcos</li><li>•Especialización en Derecho Corporativo y M&amp;A por IE Law School (Madrid).</li><li>•Diplomado Internacional en Derecho Corporativo por la Universidad ESAN.</li><li>•Especialización en Análisis de Estados Financieros y Flujo de Caja por la Escuela de Negocios CENTRUM PUCP</li><li>•Diplomado de Especialización en Derecho Corporativo por el Colegio de Abogados de Lima.</li><li>&nbsp;</li></ul>",
            'correo' => "cenriquez@evv.pe",
            'telefono' => "954 465 588",
            'imagen' => "socio_3.jpg",
            'ruta_imagen' => "assets/imagen/producto/socio_3.jpg",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Dulmer Malca",
            'resumen' => "Dulmer Malca cuenta con más de 14 años de experiencia en la asesoría en el sector inmobiliario. Sus áreas de práctica son: Derecho Civil, Derecho Administrativo, Municipal, Registral, Contrataciones con el Estado, Derecho de la Construcción y Arbitraje.",
            'descripcion' => "<p><strong>Labores académicas</strong></p><p>&nbsp;</p><ul><li>Conferencista en cursos en materia de su especialidad. Es&nbsp; Adjunto de Docencia del curso de Sociedades Anónimas en PUCP.</li><li>Se desempeñó como árbitro en materia de su desempeño académico.</li><li>&nbsp;</li></ul><p><strong>Formación</strong></p><p>&nbsp;</p><ul><li>•Abogado por la Universidad Nacional de Trujillo.</li><li>•Magíster en Derecho de la Empresa por la Pontificia Universidad Católica del Perú.</li><li>•Con especialización en Derecho Civil, Derecho de la Construcción, Derecho Administrativo, Derecho Inmobiliario, Registral, Contrataciones con el Estado y Arbitraje por parte de universidades como la UPC y PUCP.</li><li>•Especialización en Dispute Boards y Junta de Resolución de Disputas en Proyectos de Construcción en la Universidad Nacional Hermilio Valdizán y el Centro de Arbitraje Latinoamericano e Investigaciones Jurídicas.</li><li>&nbsp;</li></ul>",
            'correo' => "dmalca@evv.pe",
            'telefono' => "996 917 173",
            'imagen' => "socio_4.jpg",
            'ruta_imagen' => "assets/imagen/producto/socio_4.jpg",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Karina Quinde",
            'resumen' => "Karina Quinde es Gerente del área de Compliance y Derecho Regulatorio. Ha liderado más de 50 implementaciones de programas de cumplimiento de la UIF, y de protección al consumidor para empresas de sector turismo, inmobiliario, construcción, retail.",
            'descripcion' => "<p>Asimismo, ha sido la responsable de la implementación de políticas de Datos Personales para más de 15 empresas y ha brindado&nbsp; asesoría de procedimientos ante INDECOPI y contrataciones con el Estado. Actualmente ha sido designada como Directora del Instituto Peruano de Compliance.</p><p>&nbsp;</p><p><strong>Labores académicas</strong></p><p>&nbsp;</p><ul><li>Ha dictado cursos referidos al cumplimiento normativo en las empresas del sector inmobiliario, financiero, construcción y turismo. También ha sido expositora internacional en programas de capacitación en prevención de lavado de activos y financiamiento del terrorismo.</li><li>&nbsp;</li></ul><p><strong>Formación</strong></p><p>&nbsp;</p><ul><li>•Abogada por la Universidad de Piura</li><li>•Con especialización en Compliance y Buenas Prácticas corporativas por la&nbsp; Universidad del Pacífico.</li><li>•Con un diplomado en Derecho Administrativo por la Universidad San Martin de Porres</li><li>•Con cursos&nbsp; de postgrado en Compliance y Lucha Anticorrupción por la Universidad ESAN y UPF Barcelona School of Management de la Universidad Pompeu Fabra.</li><li>•Con postgrado en Protección de Datos Personales por la Universidad Javeriana de Colombia.</li><li>•Con cursos de post grado en Protección al Consumidor y Propiedad Intelectual por el Instituto Nacional de&nbsp; Defensa de la Competencia y de la Propiedad Intelectual – INDECOPI.</li><li>&nbsp;</li></ul>",
            'correo' => "kquinde@evv.pe",
            'telefono' => "976159605",
            'imagen' => "socio_5.jpg",
            'ruta_imagen' => "assets/imagen/producto/socio_5.jpg",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Patricia Kcomt",
            'resumen' => "Patricia Kcomt es Gerente del área Laboral y Migratoria. Ha liderado proyectos de implementación de normas de cumplimiento laboral y due diligences en compañías con más de mil (1,000) trabajadores, también lideró reestructuraciones salariales de compañías de distintos sectores, implementado políticas de igualdad salarial y asesoría en procesos de fiscalización en entidades como SUNAFIL, MTPE y SUNAT.",
            'descripcion' => "<p>Asimismo, ha tenido a cargo la contratación de personal nacional y extranjero, y ha ejecutado programas de procedimientos&nbsp; disciplinarios, desvinculación de personal colectivo e individual y de personal en posiciones directivas.&nbsp;</p><p>&nbsp;</p><p><strong>Labores académicas</strong></p><p>&nbsp;</p><ul><li>Ha dictado cursos de cumplimiento normativo laboral a empresas del sector retail, inmobiliario, agrario, construcción y turismo. Ha sido expositora en programas de capacitación en temas de igualdad salarial, prevención contra el hostigamiento sexual y derecho migratorio. También ha participado en foros estudiantiles de la Universidad de Piura y la Universidad Nacional Mayor de San Marcos.</li><li>&nbsp;</li></ul><p><strong>Formación</strong></p><p>&nbsp;</p><ul><li>•Abogada por la Universidad de Piura.</li><li>•Maestría en Derecho del Trabajo y Seguridad Social por la Pontificia Universidad Católica del Perú.</li><li>•Diplomado en el Sistema de Gestión de la SST por la Universidad San Martín de Porres.</li><li>•Con segunda especialidad de Derecho de Trabajo y Seguridad Social en la&nbsp; Pontificia Universidad Católica del Perú.</li><li>•Con una especialización en Recursos Humanos por la Universidad del Pacífico.</li><li>•Con un diplomado en el Sistema de Gestión de la SST por la Universidad San Martin de Porres.</li><li>&nbsp;</li></ul>",
            'correo' => "pkcomt@evv.pe",
            'telefono' => "950 064 488",
            'imagen' => "socio_6.jpg",
            'ruta_imagen' => "assets/imagen/producto/socio_6.jpg",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Lily Valderrama",
            'resumen' => "Lily Valderrama es Jefa del Área de Relaciones Sociales y Gubernamentales. Ha desarrollado estudios de especialización en elaboración y ejecución de proyectos basado en temáticas de patrimonio cultural, participación ciudadana, gestión y resolución de conflictos, implementando estrategias de intervención, coordinación y mesas de diálogo dirigido a las autoridades locales, comunidades, organizaciones sociales de base, instituciones y otros.",
            'descripcion' => "<p>Tiene amplio conocimiento en estrategias y técnicas organizacionales fortaleciendo el aprendizaje experiencial y el clima laboral, además de trabajo interinstitucional a través de coordinación y convenios con los diferentes actores locales de las zonas a intervenir.</p><p>&nbsp;</p><p><strong>Formación</strong></p><p>&nbsp;</p><p>•Licenciada en Antropología - Universidad Nacional de San Antonio Abad del Cusco.</p><p>•Maestría en Gerencia Social – Pontificia Universidad Católica del Perú.</p>",
            'correo' => "lily.valderrama@evv.pe",
            'telefono' => "978 748 543",
            'imagen' => "socio_7.jpg",
            'ruta_imagen' => "assets/imagen/producto/socio_7.jpg",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Johan Serrano",
            'resumen' => "Johan Serrano tiene una experiencia laboral en el campo de la arquitectura y la construcción. Ha trabajado en varios proyectos, desde la ejecución del proyecto “CONSTRUCCIÓN DEL MERCADO MULTIUSO DE PACCARECTAMBO” en 2013 hasta su labor como Asistente Técnico en el Departamento de Estudios y Proyectos de la Municipalidad Provincial de Quispicanchi en 2023.",
            'descripcion' => "<p>Su experiencia también incluye roles como Inspector de Obra para la empresa Floresta y Asistente Técnico en varias obras y municipalidades.</p><p>&nbsp;</p><p>Ha realizado inspección y supervisión de obras de acuerdo con los planos, especificaciones y normativas aplicables, y el registro preciso de los metrados de materiales utilizados en la obra. También cuenta con habilidades en la coordinación con otros miembros del equipo de construcción para garantizar la calidad y la conformidad de los trabajos, así como en la comunicación efectiva con el equipo de dirección y los subcontratistas para resolver problemas y mantener un flujo de trabajo eficiente.</p><p>&nbsp;</p><p><strong>Formación</strong></p><p>&nbsp;</p><ul><li>•Bachiller en Arquitectura. Escuela profesional de Arquitectura. Facultad de Arquitectura e Ingeniería Civil de la Universidad Nacional de San Antonio Abad del Cusco.</li><li>•Maestría en Arquitectura mención Gestión del Patrimonio Cultural, Centros y Sitios Históricos. 2020.</li><li>&nbsp;</li><li>&nbsp;</li></ul><p>&nbsp",
            'correo' => "jserrano@evv.pe",
            'telefono' => "984170044",
            'imagen' => "socio_8.jpg",
            'ruta_imagen' => "assets/imagen/producto/socio_8.jpg",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Kateleen Urbina",
            'resumen' => "Kateleen Urbina cuenta con amplia experiencia en procedimientos de saneamiento inmobiliario que incluye saneamiento de predios urbanos y rústicos, así como procedimiento de regularización de edificaciones ejecutadas sin las correspondientes autorizaciones, procedimientos de habilitación urbana, procedimiento de servidumbres en proyectos mineros y eléctricos.",
            'descripcion' => "<p>Adicionalmente, cuenta con experiencia en consultoría sobre aspectos inmobiliarios, municipales y registrales para todo tipo de inmuebles y proyectos inmobiliarios.</p><p>&nbsp;</p><p><strong>Formación</strong></p><p>&nbsp;</p><ul><li>•Abogada por la Pontificia Universidad Católica del Perú.</li><li>•Máster en Administración de Empresas en la Universidad Autónoma de Madrid.</li><li>•Diplomatura de Estudio en Saneamiento Inmobiliario Urbano y Rural en la Pontificia Universidad Católica del Perú.</li><li>&nbsp;</li></ul>",
            'correo' => "kurbina@evv.pe",
            'telefono' => "947543567",
            'imagen' => "socio_9.jpg",
            'ruta_imagen' => "assets/imagen/producto/socio_9.jpg",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Luis Cabrera",
            'resumen' => "Profesional con amplia experiencia en el sector inmobiliario, especializado en temas contractuales, registrales y municipales. Su trayectoria abarca la consultoría en la planificación, estructuración y ejecución de proyectos inmobiliarios. Ha proporcionado servicios integrales a promotores, desarrolladores y fondos de inversión, apoyándolos en todas las etapas de sus transacciones comerciales y proyectos inmobiliarios.",
            'descripcion' => "<p>Ha trabajado en el Tribunal Registral y la Superintendencia Nacional de Registros Públicos, adquiriendo un sólido conocimiento materia de calificación registral. Además, ofrece asesoría en procedimientos municipales, abarcando licencias de edificación, habilitaciones urbanas, permisos, autorizaciones, procedimientos administrativos y fiscalizaciones tributarias, entre otros.</p><p>&nbsp;</p><p><strong>Formación</strong></p><p>&nbsp;</p><ul><li>•Abogado de la Universidad Mayor de San Marcos.</li><li>•Maestría en Curso de Derecho Civil y Comercial de la Universidad Nacional Mayor de San Marcos.</li><li>•Diplomado Especializado en Derecho Notarial, Registral y Precedentes de Observancia Obligatoria Aprobados por el Tribunal Registral en el Colegio de Abogados de Lima.</li><li>•Diplomado Especializado en Derecho Societario y Corporativo en el Colegio de Abogados de Lima.</li><li>•Diplomado de Procedimiento Administrativo y Procedimiento Sancionador en la Universidad de San Martín de Porres.</li><li>•Diplomado de especialización en Derecho Registral en la Universidad de San Martín de Porres.</li><li>•Diplomado de Derecho Digital y Legaltech en la Universidad de San Martín de Porres.</li><li>&nbsp;</li></ul>",
            'correo' => "lcabrera@evv.pe",
            'telefono' => "933 636 915",
            'imagen' => "socio_10.jpg",
            'ruta_imagen' => "assets/imagen/producto/socio_10.jpg",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Ximena Samamé",
            'resumen' => "Ximena cuenta con amplia experiencia en materia de Protección al Consumidor en la redacción de escritos denuncias, descargos y recursos impugnatorios para los procedimientos administrativos sancionadores; en materia de Signos Distintivos en el registro de marcas, absolución de oposiciones, cancelaciones y nulidades de marcas presentadas en procedimientos administrativos.",
            'descripcion' => "<p>En materia de protección de datos personales implementando Programas de Gestión y Medidas de Seguridad para la Protección de Datos Personales, redacción de contestación de denuncias presentadas ante la Autoridad de Protección de datos personales como parte de procedimientos administrativos y en materia regulatoria en la elaboración de solicitudes de autorizaciones, licencias y permisos ante diferentes entidades públicas.</p><p>&nbsp;</p><p><strong>Labores académicas</strong></p><p>&nbsp;</p><ul><li>•Brinda capacitaciones en materia de atención de reclamaciones interpuestas por consumidores.</li><li>•Participa en notas de prensa, con aportes sobre noticias relevantes, publicaciones de proyectos de ley, entre otros.</li><li>&nbsp;</li></ul><p><strong>Formación</strong></p><p>&nbsp;</p><ul><li>·Abogada por la Universidad de Piura – UDEP (2024).</li><li>·Programa de Especialización en Derecho Administrativo Sancionador, realizado por la Universidad de Piura – UDEP (2019).</li><li>·Curso Especializado en Derecho del Consumidor, realizado por Ia Escuela de Postgrado de la UPC (2022).</li><li>&nbsp;</li></ul>",
            'correo' => "xsamame@evv.pe",
            'telefono' => "945 075 419",
            'imagen' => "socio_11.jpg",
            'ruta_imagen' => "assets/imagen/producto/socio_11.jpg",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Allison Trelles",
            'resumen' => "Abogada por la Universidad de Piura y Maestría con mención en Derecho Laboral por la Universidad Nacional de Piura. Acreditada como conciliadora extrajudicial por el Ministerio de Justicia y Derechos Humanos. Con experiencia en Derecho Laboral, Derecho Administrativo y Derecho Procesal Laboral.",
            'descripcion' => "<p>Ha participado en la elaboración de diversas estrategias frente a la actividad inspectiva de SUNAFIL y ha ejercido representación de las compañías ante las distintas conciliaciones del Ministerio de Trabajo. Ha participado en el planteamiento de defensa y litigado en favor de compañías del sector agrario, construcción e intermediación laboral, en materias de Seguridad y Salud en el Trabajo, Indemnización por despido arbitrario y en diversos procesos de índole contencioso administrativo frente a ESSALUD y SUNAFIL.</p><p>&nbsp;</p><p>Cuenta con habilidades de adaptación para el trabajo en equipo en la obtención de resultados, habilidad de vocación de servicios, proactividad y empatía en las diversas actividades laborales, especialmente en las diversas asesorías en temas laborales y migratorios brindados a clientes en el ámbito corporativo.&nbsp;</p><p>&nbsp;</p><p><strong>Formación</strong></p><p>&nbsp;</p><ul><li>•Abogada por la Universidad de Piura.</li><li>•Maestría con mención en Derecho Laboral por la Universidad Nacional de Piura.</li><li>•Conciliadora extrajudicial acreditada por el Ministerio de Justicia y Derechos Humanos.</li><li>•Con diversos cursos de especialización en Derecho Laboral como “Diplomado de especialización integral en derecho laboral – segunda edición” por la Universidad San Martín de Porres junto a Aula Gaceta.</li><li>•“I Curso de Ley de Seguridad y Salud en el Trabajo y su implementación en las empresas” por la Universidad de Piura.</li><li>•“Curso de Actualización en Derecho Administrativo” por el Centro de Educación Continua de la Pontificia Universidad Católica del Perú.&nbsp;</li><li>•“II Programa de actualización laboral empresarial (PALE 2023)” Ramcor International Training.</li><li>&nbsp;</li></ul>",
            'correo' => "atrelles@evv.pe",
            'telefono' => "949 487 825",
            'imagen' => "socio_12.jpg",
            'ruta_imagen' => "assets/imagen/producto/socio_12.jpg",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Gina Pineda",
            'resumen' => "Bachiller en Derecho con conocimientos en derecho administrativo y compliance. Cuenta con experiencia laboral en el sector público en entidades como Mininter, Banco de la Nación y Sutran; así como en el sector privado en estudios de abogados.",
            'descripcion' => "<p>En Valderrama Abogados ha participado en procesos de implementación y reestructuración de SPLAFT, elaboración de Informes de Due Dilligence y reportes de gestión de riesgos de LA/FT.</p><p>&nbsp;</p><p><strong>Formación</strong></p><p>&nbsp;</p><ul><li>•Bachiller en Derecho de la Universidad San Ignacio de Loyola.</li><li>•Curso de Capacitación Edex en Compliance en Centrum PUCP</li><li>•Curso de Corporate Compliance en Universidad ESAN</li><li>•Curso taller SPLAFT y normativa PLAFT en el Instituto de Democracia y Derehcos Humanos de la PUCP</li><li>•Curso de Lineamientos Generales para la Implementación del SPLAFT en la SBS.</li><li>&nbsp;</li></ul>",
            'correo' => "gpineda@evv.pe",
            'telefono' => "973 272 188",
            'imagen' => "socio_13.jpg",
            'ruta_imagen' => "assets/imagen/producto/socio_13.jpg",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "José Raunelli",
            'resumen' => "José Raunelli ha brindado servicios contractuales, societarios y sobre regulación financiera a distantes empresas nacionales e internacionales, destacando empresas de la industria financiera, educación, tecnología, fintech y telecomunicaciones.",
            'descripcion' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet. Sed faucibus lectus quam, a vulputate ligula ullamcorper ac. Sed nec odio a leo hendrerit varius. Mauris vel orci at ipsum ultricies laoreet. Sed eget lectus at lectus laoreet lobortis.</p><p>&nbsp;</p><p><strong>Labores académicas</strong></p><p>&nbsp;</p><ul><li>•Ha realizado publicaciones para Giuristi: Revista De Derecho Corporativo de la Universidad ESAN, así como para la revista de Actualidad Mercantil, revista de Derecho de la Pontificia Universidad Católica del Perú.</li><li>•Ha sido asistente de cátedra en la Universidad San Martin de Porres durante el 2023 del curso Mercado de Valores.</li><li>•Ha participado en Modelos de la Organización de los Estados Americanos a nivel nacional e internacional.</li><li>&nbsp;</li></ul><p><strong>Formación</strong></p><p>&nbsp;</p><ul><li>•Bachiller en Derecho Corporativo de la Universidad ESAN.</li><li>&nbsp;</li></ul>",
            'correo' => "jraunelli@evv.pe",
            'telefono' => "949253530",
            'imagen' => "socio_14.jpg",
            'ruta_imagen' => "assets/imagen/producto/socio_14.jpg",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Ximena Márquez",
            'resumen' => "Bachiller en Derecho por la Universidad de Piura con experiencia en la rama Laboral, Administrativa, Procesal y Regulatoria. Posee una sólida capacidad de aprendizaje y aplicación de conocimientos en el ámbito profesional, además de una gran disposición para adaptarme a diferentes áreas asignadas.",
            'descripcion' => "<p>En Valderrama Abogados ha elaborado e investigado artículos de actualidad y alertas laborales, contratos, acuerdos, políticas internas, entre otros. Asimismo, ha revisado el cumplimiento laboral de clientes, estados de trámites migratorios y consultas migratorias.</p><p>&nbsp;</p><p><strong>Formación</strong></p><p>&nbsp;</p><ul><li>•Grado en Derecho de la Universidad de Piura (Campus Lima)</li><li>•Capacitación del Sistema Peruano de Información Jurídica.</li><li>•Taller de Derecho Administrativo de la Universidad de Piura.</li><li>&nbsp;</li></ul>",
            'correo' => "xmarquez@evv.pe",
            'telefono' => "987828782",
            'imagen' => "socio_15.jpg",
            'ruta_imagen' => "assets/imagen/producto/socio_15.jpg",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

       DB::table('productos')->insert([
            'nombre' => "César Salazar",
            'resumen' => "César Salazar es Gerente del Área Tributaria. Ha realizado servicios de consultoría tributaria, planeamiento tributario, revisiones de impuestos, asesoría en fiscalizaciones tributarias, patrocinio de procedimientos tributarios a nivel administrativo y judicial, y en entes regulatorios como OEFA y OSINERGMIN.",
            'descripcion' => "<p><strong>Labores académicas</strong></p><p>&nbsp;</p><ul><li>•Profesor invitado de la Maestría de Regulación Minera en la PUCP.</li><li>•Profesor a tiempo parcial de FRI ESAN en el curso de Tributación Minera.</li><li>•Ha sido profesor adjunto de los cursos Curso Código Tributario y Legislación Tributaria en la Pontificia Universidad Católica del Perú.</li><li>•Publicación de diversos artículos sobre tributación minera.&nbsp;</li><li>•Conferencista para distintas organizaciones empresariales.</li><li>&nbsp;</li></ul><p><strong>Formación</strong></p><p>&nbsp;</p><ul><li>•Abogado de la Pontificia Universidad Católica del Perú con Especialización en Derecho Tributario.</li><li>•LL.M en Mineral Law &amp; Policy (graduado con Distinción) por la University of Dundee, en Reino Unido mediante la beca otorgada por la universidad y Rio Tinto plc.</li><li>•Curso Intensivo de Derecho Tributario Internacional por la Universidad Austral de Buenos Aires, Argentina.</li><li>&nbsp;</li></ul>",
            'correo' => "cesarsalazar@evv.pe",
            'telefono' => "999999999",
            'imagen' => "socio_16.jpg",
            'ruta_imagen' => "assets/imagen/producto/socio_16.jpg",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);
    }
}
