<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('contactos')->insert([
            'nombre' => "Juan",
            'correo' => "juan@testdominio.com",
            'telefono' => "939494509",
            'asunto' => "Solicito información",
            'mensaje' => "Solicito información",
        ]);

        DB::table('contactos')->insert([
            'nombre' => "Lucia",
            'correo' => "lucia@testdominio.com",
            'telefono' => "999393959",
            'asunto' => "Solicito información",
            'mensaje' => "Solicito información",
        ]);

        DB::table('contactos')->insert([
            'nombre' => "Pedro",
            'correo' => "pedro@testdominio.com",
            'telefono' => "905845007",
            'asunto' => "Solicito información",
            'mensaje' => "Solicito información",
        ]);
    }
}
