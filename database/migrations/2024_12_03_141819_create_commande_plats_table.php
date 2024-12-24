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
        Schema::create('commande_plats', function (Blueprint $table) {
            $table->foreignId('commande_id')->constrained('commandes')->onDelete('cascade');
            $table->foreignId('plat_id')->constrained('plats')->onDelete('cascade');
            $table->integer('nombre')->default(1);
            $table->primary(['commande_id', 'plat_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commande_plats');
    }
};
