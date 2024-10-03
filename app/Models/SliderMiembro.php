<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderMiembro extends Model
{
    use HasFactory;

    protected $table = 'slider_miembro';

    protected $fillable = ['titulo', 'descripcion','imagen','ruta_imagen'];

    protected $primaryKey = 'id_slider_miembro';
}
