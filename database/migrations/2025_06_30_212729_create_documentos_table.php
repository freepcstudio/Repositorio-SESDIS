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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('sumilla');
            $table->date('fecha');
            $table->string('autor');
            $table->string('aprobado_por');
            $table->string('revisado_por');
            $table->string('version')->default('1.0');
            $table->integer('paginas');
            $table->string('archivo_pdf'); // ruta o nombre de archivo
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
