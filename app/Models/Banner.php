<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banners';

    protected $fillable = ['titulo', 'descripcion','imagen','ruta_imagen'];

    protected $primaryKey = 'id_banner';
}
