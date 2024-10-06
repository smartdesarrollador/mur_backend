<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SliderComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        $horaActual = Carbon::now();

        DB::table('slider_comentario')->insert([
            'id_slider_comentario' => 1,
            'titulo' => "Ximena Samamé",
            'descripcion' => "",
            'imagen' => "foto_1.jpg",
            'ruta_imagen' => "assets/imagen/slider/comentario/foto_1.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('slider_comentario')->insert([
            'id_slider_comentario' => 2,
            'titulo' => "Patricia Kcomt",
            'descripcion' => "",
            'imagen' => "foto_2.jpg",
            'ruta_imagen' => "assets/imagen/slider/comentario/foto_2.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('slider_comentario')->insert([
            'id_slider_comentario' => 3,
            'titulo' => "Luis Cabrera",
            'descripcion' => "",
            'imagen' => "foto_3.jpg",
            'ruta_imagen' => "assets/imagen/slider/comentario/foto_3.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('slider_comentario')->insert([
            'id_slider_comentario' => 4,
            'titulo' => "Luis Cabrera",
            'descripcion' => "",
            'imagen' => "foto_4.jpg",
            'ruta_imagen' => "assets/imagen/slider/comentario/foto_4.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);
    }
}
