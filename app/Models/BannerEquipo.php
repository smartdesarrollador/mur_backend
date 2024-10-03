<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerEquipo extends Model
{
    use HasFactory;

    protected $table = 'banner_equipo';

    protected $fillable = ['imagen', 'ruta_imagen'];

    protected $primaryKey = 'id_banner_equipo';
}
