<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndustriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        $horaActual = Carbon::now();
        //
        DB::table('industrias')->insert([
            'id_industria' => 1,
            'titulo' => "Inmobiliaria",
            'descripcion' => "",
            'imagen' => "foto_1.jpg",
            'ruta_imagen' => "assets/imagen/industrias/foto_1.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);
        
    }
}
