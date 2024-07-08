<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        $horaActual = Carbon::now();

        DB::table('sliders')->insert([
            'id_slider' => 1,
            'titulo' => "Ximena Samamé",
            'descripcion' => "",
            'imagen' => "foto_1.jpg",
            'ruta_imagen' => "assets/imagen/carousel/foto_1.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('sliders')->insert([
            'id_slider' => 2,
            'titulo' => "Patricia Kcomt",
            'descripcion' => "",
            'imagen' => "foto_2.jpg",
            'ruta_imagen' => "assets/imagen/carousel/foto_2.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('sliders')->insert([
            'id_slider' => 3,
            'titulo' => "Luis Cabrera",
            'descripcion' => "",
            'imagen' => "foto_3.jpg",
            'ruta_imagen' => "assets/imagen/carousel/foto_3.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('sliders')->insert([
            'id_slider' => 4,
            'titulo' => "Lily Valderrama",
            'descripcion' => "",
            'imagen' => "foto_4.jpg",
            'ruta_imagen' => "assets/imagen/carousel/foto_4.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('sliders')->insert([
            'id_slider' => 5,
            'titulo' => "Kateleen Urbina",
            'descripcion' => "",
            'imagen' => "foto_5.jpg",
            'ruta_imagen' => "assets/imagen/carousel/foto_5.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('sliders')->insert([
            'id_slider' => 6,
            'titulo' => "Karina Quinde",
            'descripcion' => "",
            'imagen' => "foto_6.jpg",
            'ruta_imagen' => "assets/imagen/carousel/foto_6.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('sliders')->insert([
            'id_slider' => 7,
            'titulo' => "Gina Pineda",
            'descripcion' => "",
            'imagen' => "foto_7.jpg",
            'ruta_imagen' => "assets/imagen/carousel/foto_7.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('sliders')->insert([
            'id_slider' => 8,
            'titulo' => "Fabiola Ruiz",
            'descripcion' => "",
            'imagen' => "foto_8.jpg",
            'ruta_imagen' => "assets/imagen/carousel/foto_8.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('sliders')->insert([
            'id_slider' => 9,
            'titulo' => "Erick Valderrama",
            'descripcion' => "",
            'imagen' => "foto_9.jpg",
            'ruta_imagen' => "assets/imagen/carousel/foto_9.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('sliders')->insert([
            'id_slider' => 10,
            'titulo' => "Dulmer Malca",
            'descripcion' => "",
            'imagen' => "foto_10.jpg",
            'ruta_imagen' => "assets/imagen/carousel/foto_10.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('sliders')->insert([
            'id_slider' => 11,
            'titulo' => "Carlos Enríquez",
            'descripcion' => "",
            'imagen' => "foto_11.jpg",
            'ruta_imagen' => "assets/imagen/carousel/foto_11.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('sliders')->insert([
            'id_slider' => 12,
            'titulo' => "Allison Trelles",
            'descripcion' => "",
            'imagen' => "foto_12.jpg",
            'ruta_imagen' => "assets/imagen/carousel/foto_12.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('sliders')->insert([
            'id_slider' => 13,
            'titulo' => "Johan Serrano",
            'descripcion' => "",
            'imagen' => "foto_13.jpg",
            'ruta_imagen' => "assets/imagen/carousel/foto_13.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('sliders')->insert([
            'id_slider' => 14,
            'titulo' => "José Raunelli",
            'descripcion' => "",
            'imagen' => "foto_14.jpg",
            'ruta_imagen' => "assets/imagen/carousel/foto_14.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('sliders')->insert([
            'id_slider' => 15,
            'titulo' => "Ximena Márquez",
            'descripcion' => "",
            'imagen' => "foto_15.jpg",
            'ruta_imagen' => "assets/imagen/carousel/foto_15.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('sliders')->insert([
            'id_slider' => 16,
            'titulo' => "César Salazar",
            'descripcion' => "",
            'imagen' => "foto_16.jpg",
            'ruta_imagen' => "assets/imagen/carousel/foto_16.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);
    }
}
