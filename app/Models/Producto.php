<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\CategoriaProducto;
use App\Models\Pedido;

class Producto extends Model
{
    use HasFactory;

    /* 5.- CRUD-BASICO-V1-P1 */
    protected $table = 'productos';

    protected $primaryKey = 'id_producto';

     protected $fillable = ['nombre','cargo','resumen','descripcion','correo','telefono','imagen','ruta_imagen','pdf','ruta_pdf', 'categoria_producto_id'];

     /* /5.- CRUD-BASICO-V1-P1 */

    public function categoria_productos()
    {
        return $this->belongsTo(CategoriaProducto::class, 'categoria_producto_id', 'id_categoria_producto');
    }

}
