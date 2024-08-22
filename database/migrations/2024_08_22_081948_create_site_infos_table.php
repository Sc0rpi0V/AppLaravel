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
        Schema::create('site_infos', function (Blueprint $table) {
            $table->id();
            $table->string('siteName');
            $table->text('siteDescription');
            $table->text('siteUrlName');
            $table->text('siteListPlugins');
            $table->string('siteType');
            $table->string('siteTheme');
            $table->string('siteEditor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_infos');
    }
};
