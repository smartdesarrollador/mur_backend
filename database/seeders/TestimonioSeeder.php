<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TestimonioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        DB::table('testimonios')->insert([
            'Titulo' => "Legal Compliance",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Compliance.png",
            'ruta_imagen' => "assets/imagen/testimonio/Compliance.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Corporativo",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Corporativo.png",
            'ruta_imagen' => "assets/imagen/testimonio/Corporativo.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Fusiones y Adquisiciones",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "icon-3.png",
            'ruta_imagen' => "assets/imagen/testimonio/icon-3.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Derecho Financiero",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Fondos de Inversion.png",
            'ruta_imagen' => "assets/imagen/testimonio/Fondos de Inversion.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Precios de Transferencia",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Precios_de_Transferencia.png",
            'ruta_imagen' => "assets/imagen/testimonio/Precios_de_Transferencia.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Laboral",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Laboral.png",
            'ruta_imagen' => "assets/imagen/testimonio/Laboral.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Migratorio",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Migratorio.png",
            'ruta_imagen' => "assets/imagen/testimonio/Migratorio.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Inmobiliario",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Inmobiliario.png",
            'ruta_imagen' => "assets/imagen/testimonio/Inmobiliario.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Administrativo",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Administrativo.png",
            'ruta_imagen' => "assets/imagen/testimonio/Administrativo.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Protección de Datos Personales",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Datos_Personales.png",
            'ruta_imagen' => "assets/imagen/testimonio/Datos_Personales.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Protección al Consumidor",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Proteccion_al_consumidor.png",
            'ruta_imagen' => "assets/imagen/testimonio/Proteccion_al_consumidor.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Propiedad Intelectual",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Marcas_y_Patentes.png",
            'ruta_imagen' => "assets/imagen/testimonio/Marcas_y_Patentes.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Contrataciones con el Estado",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Contrataciones_con_el_Estado.png",
            'ruta_imagen' => "assets/imagen/testimonio/Contrataciones_con_el_Estado.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Advisory",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Advisory.png",
            'ruta_imagen' => "assets/imagen/testimonio/Advisory.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Fusiones y Adquisciones",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Funsiones_y_Adquisciones.png",
            'ruta_imagen' => "assets/imagen/testimonio/Funsiones_y_Adquisciones.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Outsourcing",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Outsourcing.png",
            'ruta_imagen' => "assets/imagen/testimonio/Outsourcing.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Regulatorio",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Regulatorio.png",
            'ruta_imagen' => "assets/imagen/testimonio/Regulatorio.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Relaciones Gubernamentales",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Relaciones_Gubernamentales.png",
            'ruta_imagen' => "assets/imagen/testimonio/Relaciones_Gubernamentales.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Relaciones Sociales",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Relaciones_sociales.png",
            'ruta_imagen' => "assets/imagen/testimonio/Relaciones_sociales.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Seguridad y Salud en el Trabajo",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Seguridad_y_Salud_en_el_Trabajo.png",
            'ruta_imagen' => "assets/imagen/testimonio/Seguridad_y_Salud_en_el_Trabajo.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "Urbanismo",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "Urbanismo.png",
            'ruta_imagen' => "assets/imagen/testimonio/Urbanismo.png",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);
        
    }
}
