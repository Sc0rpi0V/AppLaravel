<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('project_type');
            $table->string('site_goal');
            $table->text('site_goal_details')->nullable();
            $table->text('project_details');
            $table->text('plugins')->nullable();
            $table->string('theme');
            $table->string('editor');
            $table->json('blocks')->nullable();
            $table->json('additional_features')->nullable();
            $table->integer('pages_count');
            $table->string('content_ready');
            $table->string('speed_optimization');
            $table->text('security_needs')->nullable();
            $table->string('mobile_optimization');
            $table->string('seo_services');
            $table->string('hosting_needs');
            $table->string('maintenance_services');
            $table->string('budget');
            $table->string('timeline');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
