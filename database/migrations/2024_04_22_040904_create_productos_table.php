<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id("id_producto");
            $table->string("nombre", 250)->nullable();
            $table->string("resumen", 500)->nullable();
            $table->text("descripcion")->nullable();
            $table->string("correo", 250)->nullable();
            $table->string("telefono", 250)->nullable();
            $table->string("imagen", 250)->nullable();
            $table->string("ruta_imagen", 250)->nullable();
         /*    $table->string("maestro", 250)->nullable();
            $table->string("observacion", 250)->nullable();
            $table->float("precio")->nullable();
            $table->string("destacado", 20)->nullable();
            $table->boolean('destacado')->default(false); */
            $table->unsignedBigInteger("categoria_producto_id")->nullable();
            $table->foreign("categoria_producto_id")->references("id_categoria_producto")->on("categoria_productos")->onDelete("set null");
            /* $table->float("precio_tachado")->nullable();
            $table->float("precio_descuento")->nullable();
            $table->string("stock", 250)->nullable();
            $table->string("estado", 250)->nullable();
            $table->integer("posicion")->nullable();
            $table->integer("acumulaNPuntos")->nullable();
            $table->float("store_id")->nullable(); */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
