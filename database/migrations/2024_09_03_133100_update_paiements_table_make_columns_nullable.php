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
        Schema::table('paiements', function (Blueprint $table) {
            $table->string('titulaire')->nullable()->change();
            $table->string('nameBank')->nullable()->change();
            $table->string('addressBank')->nullable()->change();
            $table->string('bic')->nullable()->change();
            $table->string('iban')->nullable()->change();
            $table->string('firstname')->nullable->change();
            $table->string('lastname')->nullable->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('paiements', function (Blueprint $table) {
            $table->string('titulaire')->nullable(false)->change();
            $table->string('nameBank')->nullable(false)->change();
            $table->string('addressBank')->nullable(false)->change();
            $table->string('bic')->nullable(false)->change();
            $table->string('iban')->nullable(false)->change();
            $table->string('firstname')->nullable(false)->change();
            $table->string('lastname')->nullable(false)->change();
        });
    }
};
