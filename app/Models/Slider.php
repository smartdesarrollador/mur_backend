<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';

    protected $fillable = ['titulo', 'descripcion','imagen','ruta_imagen'];

    protected $primaryKey = 'id_slider';
}
