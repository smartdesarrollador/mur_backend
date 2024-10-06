<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SliderMiembroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        $horaActual = Carbon::now();

        DB::table('slider_miembro')->insert([
            'id_slider_miembro' => 1,
            'titulo' => "Ximena Samamé",
            'descripcion' => "",
            'imagen' => "foto_1.jpg",
            'ruta_imagen' => "assets/imagen/slider/miembro/foto_1.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('slider_miembro')->insert([
            'id_slider_miembro' => 2,
            'titulo' => "Patricia Kcomt",
            'descripcion' => "",
            'imagen' => "foto_2.jpg",
            'ruta_imagen' => "assets/imagen/slider/miembro/foto_2.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

       
    }
}
