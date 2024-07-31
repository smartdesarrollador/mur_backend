<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SalasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        $descripcion = "<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Morbi non nibh ac neque consectetur laoreet. Sed faucibus lectus quam, a vulputate ligula ullamcorper ac. Sed nec odio a leo hendrerit varius. Mauris vel orci at ipsum ultricies laoreet. Sed eget lectus at lectus laoreet lobortis.</p><p>&nbsp;</p><p><strong>Lorem Ipsum Dolor Sit Amet</strong></p><p>&nbsp;</p><p><strong>Pre-requisitos:</strong></p><p>&nbsp;</p><ul><li>Conocimientos de manejo de datos y/o excel básico.</li><li>&nbsp;</li></ul><p><strong>Objetivo General:</strong></p><p>&nbsp;</p><ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>&nbsp;</li></ul><p><strong>Objetivos Específicos:</strong></p><ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>&nbsp;</li></ul><p><strong>Resumen del contenido:</strong></p><ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>&nbsp;</li></ul><p><strong>Please note:</strong></p><ul><li>I have replaced all specific text with generic Lorem ipsum text.</li><li>I have kept the headings and subheadings the same.</li><li>I have kept the bullet points and list structure the same.</li></ul><p>I hope this is helpful! Let me know if you have any other questions.</p>";

        DB::table('salas')->insert([
            'titulo' => "Título principal",
            'descripcion' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            'link' => "https://nombreenlace.com",
            'imagen' => "imagen_1.jpg",
            'ruta_imagen' => "assets/imagen/sala/imagen_1.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('salas')->insert([
            'titulo' => "Título principal",
            'descripcion' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            'link' => "https://nombreenlace.com",
            'imagen' => "imagen_2.jpg",
            'ruta_imagen' => "assets/imagen/sala/imagen_2.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('salas')->insert([
            'titulo' => "Título principal",
            'descripcion' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            'link' => "https://nombreenlace.com",
            'imagen' => "imagen_3.jpg",
            'ruta_imagen' => "assets/imagen/sala/imagen_3.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('salas')->insert([
            'titulo' => "Título principal",
            'descripcion' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            'link' => "https://nombreenlace.com",
            'imagen' => "imagen_4.jpg",
            'ruta_imagen' => "assets/imagen/sala/imagen_4.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('salas')->insert([
            'titulo' => "Título principal",
            'descripcion' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            'link' => "https://nombreenlace.com",
            'imagen' => "imagen_5.jpg",
            'ruta_imagen' => "assets/imagen/sala/imagen_5.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('salas')->insert([
            'titulo' => "Título principal",
            'descripcion' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
            'link' => "https://nombreenlace.com",
            'imagen' => "imagen_6.jpg",
            'ruta_imagen' => "assets/imagen/sala/imagen_6.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);
    }
}
