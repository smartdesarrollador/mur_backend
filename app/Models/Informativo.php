<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informativo extends Model
{
    use HasFactory;

    protected $table = 'informativos';

    protected $primaryKey = 'id_informativo';

     protected $fillable = ['titulo','resumen','descripcion','fuente','imagen','ruta_imagen','autor','destacado'];
}
