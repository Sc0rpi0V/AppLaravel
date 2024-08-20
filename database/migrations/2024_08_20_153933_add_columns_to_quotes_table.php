<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToQuotesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('quotes', function (Blueprint $table) {
            if (!Schema::hasColumn('quotes', 'project_name')) {
                $table->string('project_name');
            }
            if (!Schema::hasColumn('quotes', 'project_url')) {
                $table->string('project_url');
            }
            if (!Schema::hasColumn('quotes', 'project_type')) {
                $table->string('project_type');
            }
            if (!Schema::hasColumn('quotes', 'site_goal')) {
                $table->string('site_goal');
            }
            if (!Schema::hasColumn('quotes', 'site_goal_details')) {
                $table->string('site_goal_details')->nullable();
            }
            if (!Schema::hasColumn('quotes', 'project_details')) {
                $table->text('project_details');
            }
            if (!Schema::hasColumn('quotes', 'plugins')) {
                $table->text('plugins')->nullable();
            }
            if (!Schema::hasColumn('quotes', 'theme')) {
                $table->string('theme');
            }
            if (!Schema::hasColumn('quotes', 'editor')) {
                $table->string('editor');
            }
            if (!Schema::hasColumn('quotes', 'blocks')) {
                $table->json('blocks')->nullable();
            }
            if (!Schema::hasColumn('quotes', 'additional_features')) {
                $table->json('additional_features')->nullable();
            }
            if (!Schema::hasColumn('quotes', 'pages_count')) {
                $table->integer('pages_count');
            }
            if (!Schema::hasColumn('quotes', 'content_ready')) {
                $table->string('content_ready');
            }
            if (!Schema::hasColumn('quotes', 'speed_optimization')) {
                $table->string('speed_optimization');
            }
            if (!Schema::hasColumn('quotes', 'security_needs')) {
                $table->text('security_needs')->nullable();
            }
            if (!Schema::hasColumn('quotes', 'mobile_optimization')) {
                $table->string('mobile_optimization');
            }
            if (!Schema::hasColumn('quotes', 'seo_services')) {
                $table->string('seo_services');
            }
            if (!Schema::hasColumn('quotes', 'hosting_needs')) {
                $table->string('hosting_needs');
            }
            if (!Schema::hasColumn('quotes', 'maintenance_services')) {
                $table->string('maintenance_services');
            }
            if (!Schema::hasColumn('quotes', 'budget')) {
                $table->string('budget');
            }
            if (!Schema::hasColumn('quotes', 'timeline')) {
                $table->string('timeline');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->dropColumn([
                'project_name',
                'project_url',
                'project_type',
                'site_goal',
                'site_goal_details',
                'project_details',
                'plugins',
                'theme',
                'editor',
                'blocks',
                'additional_features',
                'pages_count',
                'content_ready',
                'speed_optimization',
                'security_needs',
                'mobile_optimization',
                'seo_services',
                'hosting_needs',
                'maintenance_services',
                'budget',
                'timeline',
            ]);
        });
    }
}
