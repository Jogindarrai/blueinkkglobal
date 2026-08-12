<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('country_pages', 'government_fees_heading')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->string('government_fees_heading')->nullable();
            });
        }

        if (!Schema::hasColumn('country_pages', 'government_fees_items')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->json('government_fees_items')->nullable();
            });
        }

        if (!Schema::hasColumn('country_pages', 'registration_time_heading')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->string('registration_time_heading')->nullable();
            });
        }

        if (!Schema::hasColumn('country_pages', 'registration_time_items')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->json('registration_time_items')->nullable();
            });
        }

        if (!Schema::hasColumn('country_pages', 'registration_time_content')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->longText('registration_time_content')->nullable();
            });
        }
    }

    public function down(): void
    {
        $columns = [
            'government_fees_heading',
            'government_fees_items',
            'registration_time_heading',
            'registration_time_items',
            'registration_time_content',
        ];

        foreach ($columns as $column) {
            if (Schema::hasColumn('country_pages', $column)) {
                Schema::table(
                    'country_pages',
                    function (Blueprint $table) use ($column) {
                        $table->dropColumn($column);
                    }
                );
            }
        }
    }
};