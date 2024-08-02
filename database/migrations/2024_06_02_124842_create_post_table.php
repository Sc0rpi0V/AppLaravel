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
            $table->id(); // Colonne 'id' auto-incrémentée (clé primaire)
            $table->string('title'); // Colonne 'title' de type string
            $table->string('slug')->unique(); // Colonne 'slug' de type string, avec contrainte d'unicité
            $table->longText('excerpt'); // Colonne 'excerpt' de type longText
            $table->timestamps(); // Colonnes 'created_at' et 'updated_at' pour les timestamps
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
