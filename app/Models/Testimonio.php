<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{
    use HasFactory;

    protected $table = 'testimonios';

    protected $fillable = ['titulo', 'descripcion','imagen','ruta_imagen','banner','ruta_banner','imagen_uno','ruta_imagen_uno','imagen_dos','ruta_imagen_dos'];

    protected $primaryKey = 'id_testimonio';
}
