<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MediosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        DB::table('medios')->insert([
            'id_medios' => 1,
            'nombre' => "banner_1.jpg",
            'url' => "assets/imagen/banner/banner_1.jpg",
            'id_tipos_medios' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

    }
}
