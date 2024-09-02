<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Commande pour créer cette migration : php artisan make:migration CreatePostTable
// php artisan migrate => Create database

return new class extends Migration
{
    /**
     * Exécute les migrations.
     */
    public function up(): void
    {
        // Crée la table 'posts' dans la base de données
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Annule les migrations.
     */
    public function down(): void
    {
        // Supprime la table 'posts' de la base de données
        Schema::dropIfExists('posts');
    }
};
