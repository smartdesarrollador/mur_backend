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
        Schema::create('carousel', function (Blueprint $table) {
            $table->id('id_carousel');
            $table->string('nombre_carousel')->nullable();
            $table->string('nombre_socio')->nullable();
            $table->string('url_carousel')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carousel');
    }
};
