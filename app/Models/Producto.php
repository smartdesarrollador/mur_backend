<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\CategoriaProducto;
use App\Models\Pedido;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $primaryKey = 'id_producto';

     protected $fillable = ['nombre','resumen','descripcion','correo','telefono','ruta_imagen', 'categoria_producto_id'];

    public function categoria_productos()
    {
        return $this->belongsTo(CategoriaProducto::class, 'categoria_producto_id', 'id_categoria_producto');
    }

}
