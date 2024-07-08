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
            'descripcion' => $descripcion,
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
            'descripcion' => $descripcion,
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
            'descripcion' => $descripcion,
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
            'descripcion' => $descripcion,
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
            'descripcion' => $descripcion,
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
            'descripcion' => $descripcion,
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
            'descripcion' => $descripcion,
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
            'descripcion' => $descripcion,
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
            'descripcion' => $descripcion,
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
            'descripcion' => $descripcion,
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
            'descripcion' => $descripcion,
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
            'descripcion' => $descripcion,
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
            'descripcion' => $descripcion,
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
            'descripcion' => $descripcion,
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
            'descripcion' => $descripcion,
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
            'descripcion' => $descripcion,
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
