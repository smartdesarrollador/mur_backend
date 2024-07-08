<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        DB::table('banners')->insert([
            'titulo' => "Líderes en soluciones legales",
            'descripcion' => "Creatividad, innovación y excelencia.",
            'imagen' => "banner_1.jpg",
            'ruta_imagen' => "assets/imagen/banner/banner_1.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

    }
}
