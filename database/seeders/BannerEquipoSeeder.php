<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BannerEquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $horaActual = Carbon::now();

        DB::table('banner_equipo')->insert([
            'id_banner_equipo' => 1,
            'imagen' => "banner_1.jpg",
            'ruta_imagen' => "assets/imagen/banner_equipo/banner_1.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);
    }
}
