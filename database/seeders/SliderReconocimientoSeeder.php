<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SliderReconocimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        $horaActual = Carbon::now();

        DB::table('slider_reconocimiento')->insert([
            'id_slider_reconocimiento' => 1,
            'titulo' => "Ximena Samamé",
            'descripcion' => "",
            'imagen' => "foto_1.jpg",
            'ruta_imagen' => "assets/imagen/slider/reconocimiento/foto_1.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('slider_reconocimiento')->insert([
            'id_slider_reconocimiento' => 2,
            'titulo' => "Patricia Kcomt",
            'descripcion' => "",
            'imagen' => "foto_2.jpg",
            'ruta_imagen' => "assets/imagen/slider/reconocimiento/foto_2.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('slider_reconocimiento')->insert([
            'id_slider_reconocimiento' => 3,
            'titulo' => "Luis Cabrera",
            'descripcion' => "",
            'imagen' => "foto_3.jpg",
            'ruta_imagen' => "assets/imagen/slider/reconocimiento/foto_3.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);
    }
}
