<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        DB::table('carousel')->insert([
            'id_carousel' => 1,
            'nombre_carousel' => "foto_1.jpg",
            'nombre_socio' => "Ximena Samamé",
            'url_carousel' => "assets/imagen/carousel/foto_1.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('carousel')->insert([
            'id_carousel' => 2,
            'nombre_carousel' => "foto_2.jpg",
            'nombre_socio' => "Patricia Kcomt",
            'url_carousel' => "assets/imagen/carousel/foto_2.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('carousel')->insert([
            'id_carousel' => 3,
            'nombre_carousel' => "foto_3.jpg",
            'nombre_socio' => "Luis Cabrera",
            'url_carousel' => "assets/imagen/carousel/foto_3.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('carousel')->insert([
            'id_carousel' => 4,
            'nombre_carousel' => "foto_4.jpg",
            'nombre_socio' => "Lily Valderrama",
            'url_carousel' => "assets/imagen/carousel/foto_4.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('carousel')->insert([
            'id_carousel' => 5,
            'nombre_carousel' => "foto_5.jpg",
            'nombre_socio' => "Kateleen Urbina",
            'url_carousel' => "assets/imagen/carousel/foto_5.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('carousel')->insert([
            'id_carousel' => 6,
            'nombre_carousel' => "foto_6.jpg",
            'nombre_socio' => "Karina Quinde",
            'url_carousel' => "assets/imagen/carousel/foto_6.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('carousel')->insert([
            'id_carousel' => 7,
            'nombre_carousel' => "foto_7.jpg",
            'nombre_socio' => "Gina Pineda",
            'url_carousel' => "assets/imagen/carousel/foto_7.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('carousel')->insert([
            'id_carousel' => 8,
            'nombre_carousel' => "foto_8.jpg",
            'nombre_socio' => "Fabiola Ruiz",
            'url_carousel' => "assets/imagen/carousel/foto_8.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('carousel')->insert([
            'id_carousel' => 9,
            'nombre_carousel' => "foto_9.jpg",
            'nombre_socio' => "Erick Valderrama",
            'url_carousel' => "assets/imagen/carousel/foto_9.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('carousel')->insert([
            'id_carousel' => 10,
            'nombre_carousel' => "foto_10.jpg",
            'nombre_socio' => "Dulmer Malca",
            'url_carousel' => "assets/imagen/carousel/foto_10.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('carousel')->insert([
            'id_carousel' => 11,
            'nombre_carousel' => "foto_11.jpg",
            'nombre_socio' => "Johan Serrano",
            'url_carousel' => "assets/imagen/carousel/foto_11.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('carousel')->insert([
            'id_carousel' => 12,
            'nombre_carousel' => "foto_12.jpg",
            'nombre_socio' => "José Raunelli",
            'url_carousel' => "assets/imagen/carousel/foto_12.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('carousel')->insert([
            'id_carousel' => 13,
            'nombre_carousel' => "foto_13.jpg",
            'nombre_socio' => "Ximena Márquez",
            'url_carousel' => "assets/imagen/carousel/foto_13.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        

       
    }
}
