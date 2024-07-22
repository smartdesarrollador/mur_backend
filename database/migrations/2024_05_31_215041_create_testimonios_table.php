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
        Schema::create('testimonios', function (Blueprint $table) {
            $table->id("id_testimonio");
            $table->string("titulo", 250)->nullable();
            $table->text("descripcion")->nullable();
            $table->string("imagen", 250)->nullable();
            $table->string("ruta_imagen", 250)->nullable();
            $table->string("banner", 250)->nullable();
            $table->string("ruta_banner", 250)->nullable();
            $table->string("imagen_uno", 250)->nullable();
            $table->string("ruta_imagen_uno", 250)->nullable();
            $table->string("imagen_dos", 250)->nullable();
            $table->string("ruta_imagen_dos", 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonios');
    }
};
