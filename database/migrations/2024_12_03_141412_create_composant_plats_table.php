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
        Schema::create('composant_plats', function (Blueprint $table) {
            $table->foreignId('composant_id')->constrained('composants')->onDelete('cascade');
            $table->foreignId('plat_id')->constrained('plats')->onDelete('cascade');
            $table->decimal('quantite', 10, 2);
            $table->string('unité');
            $table->primary(['composant_id', 'plat_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('composant_plats');
    }
};
