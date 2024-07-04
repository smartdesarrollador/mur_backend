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
        Schema::create('permisos_roles', function (Blueprint $table) {
            $table->id('id_permiso_rol');
            $table->unsignedBigInteger("id_permiso")->nullable();
            $table->foreign("id_permiso")->references("id_permiso")->on("permisos")->onDelete("set null");
            $table->unsignedBigInteger("id_rol")->nullable();
            $table->foreign("id_rol")->references("id_rol")->on("roles")->onDelete("set null");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisos_roles');
    }
};
