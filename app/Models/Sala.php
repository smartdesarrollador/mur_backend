<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    protected $table = 'salas';

    protected $primaryKey = 'id_sala';

     protected $fillable = ['titulo','descripcion','link','imagen','ruta_imagen'];
}
