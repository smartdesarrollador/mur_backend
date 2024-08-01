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
        Schema::create('informativos', function (Blueprint $table) {
            $table->id("id_informativo");
            $table->string("titulo", 250)->nullable();
            $table->string("resumen", 250)->nullable();
            $table->text("descripcion")->nullable();
            $table->string("fuente", 250)->nullable();
            $table->string("imagen", 250)->nullable();
            $table->string("ruta_imagen", 250)->nullable();
            $table->string("autor", 250)->nullable();
            $table->float("precio")->nullable();
            $table->string("destacado", 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informativos');
    }
};
