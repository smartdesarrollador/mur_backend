<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InformativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        $descripcion = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet. Sed faucibus lectus quam, a vulputate ligula ullamcorper ac. Sed nec odio a leo hendrerit varius. Mauris vel orci at ipsum ultricies laoreet. Sed eget lectus at lectus laoreet lobortis.</p><p>&nbsp;</p><p><strong>Lorem Ipsum Dolor Sit Amet</strong></p><p>&nbsp;</p><p><strong>Pre-requisitos:</strong></p><p>&nbsp;</p><ul><li>Conocimientos de manejo de datos y/o excel básico.</li><li>&nbsp;</li></ul><p><strong>Objetivo General:</strong></p><p>&nbsp;</p><ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>&nbsp;</li></ul><p><strong>Objetivos Específicos:</strong></p><ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>&nbsp;</li></ul><p><strong>Resumen del contenido:</strong></p><ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>&nbsp;</li></ul><p><strong>Please note:</strong></p><ul><li>I have replaced all specific text with generic Lorem ipsum text.</li><li>I have kept the headings and subheadings the same.</li><li>I have kept the bullet points and list structure the same.</li></ul><p>I hope this is helpful! Let me know if you have any other questions.</p>";

        DB::table('informativos')->insert([
            'titulo' => "INFORMATIVO 1",
            'resumen' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'descripcion' => $descripcion,
            'fuente' => "https://direccionfuente.com",
            'imagen' => "informativo_1.jpg",
            'ruta_imagen' => "assets/imagen/informativo/informativo_1.jpg",
            /* 'maestro' => "maestro1", */
            'autor' => "John Smith",
            'destacado' => "false",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('informativos')->insert([
            'titulo' => "INFORMATIVO 2",
            'resumen' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'descripcion' => $descripcion,
            'fuente' => "https://direccionfuente.com",
            'imagen' => "informativo_2.jpg",
            'ruta_imagen' => "assets/imagen/informativo/informativo_2.jpg",
            /* 'maestro' => "maestro1", */
            'autor' => "John Smith",
            'destacado' => "false",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('informativos')->insert([
            'titulo' => "INFORMATIVO 3",
            'resumen' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'descripcion' => $descripcion,
            'fuente' => "https://direccionfuente.com",
            'imagen' => "informativo_3.jpg",
            'ruta_imagen' => "assets/imagen/informativo/informativo_3.jpg",
            /* 'maestro' => "maestro1", */
            'autor' => "John Smith",
            'destacado' => "false",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('informativos')->insert([
            'titulo' => "INFORMATIVO 4",
            'resumen' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'descripcion' => $descripcion,
            'fuente' => "https://direccionfuente.com",
            'imagen' => "informativo_4.jpg",
            'ruta_imagen' => "assets/imagen/informativo/informativo_4.jpg",
            /* 'maestro' => "maestro1", */
            'autor' => "John Smith",
            'destacado' => "false",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('informativos')->insert([
            'titulo' => "INFORMATIVO 5",
            'resumen' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'descripcion' => $descripcion,
            'fuente' => "https://direccionfuente.com",
            'imagen' => "informativo_5.jpg",
            'ruta_imagen' => "assets/imagen/informativo/informativo_5.jpg",
            /* 'maestro' => "maestro1", */
            'autor' => "John Smith",
            'destacado' => "false",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('informativos')->insert([
            'titulo' => "INFORMATIVO 6",
            'resumen' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'descripcion' => $descripcion,
            'fuente' => "https://direccionfuente.com",
            'imagen' => "informativo_6.jpg",
            'ruta_imagen' => "assets/imagen/informativo/informativo_6.jpg",
            /* 'maestro' => "maestro1", */
            'autor' => "John Smith",
            'destacado' => "false",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('informativos')->insert([
            'titulo' => "INFORMATIVO 7",
            'resumen' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'descripcion' => $descripcion,
            'fuente' => "https://direccionfuente.com",
            'imagen' => "informativo_7.jpg",
            'ruta_imagen' => "assets/imagen/informativo/informativo_7.jpg",
            /* 'maestro' => "maestro1", */
            'autor' => "John Smith",
            'destacado' => "false",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('informativos')->insert([
            'titulo' => "INFORMATIVO 8",
            'resumen' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'descripcion' => $descripcion,
            'fuente' => "https://direccionfuente.com",
            'imagen' => "informativo_8.jpg",
            'ruta_imagen' => "assets/imagen/informativo/informativo_8.jpg",
            /* 'maestro' => "maestro1", */
            'autor' => "John Smith",
            'destacado' => "false",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('informativos')->insert([
            'titulo' => "INFORMATIVO 9",
            'resumen' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'descripcion' => $descripcion,
            'fuente' => "https://direccionfuente.com",
            'imagen' => "informativo_9.jpg",
            'ruta_imagen' => "assets/imagen/informativo/informativo_9.jpg",
            /* 'maestro' => "maestro1", */
            'autor' => "John Smith",
            'destacado' => "false",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

    }
}
