<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('country_pages', 'documents_heading')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->string('documents_heading')->nullable();
            });
        }

        if (!Schema::hasColumn('country_pages', 'documents_intro')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->longText('documents_intro')->nullable();
            });
        }

        if (!Schema::hasColumn('country_pages', 'documents_items')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->json('documents_items')->nullable();
            });
        }

        if (!Schema::hasColumn('country_pages', 'documents_note')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->longText('documents_note')->nullable();
            });
        }

        if (!Schema::hasColumn('country_pages', 'documents_cta_heading')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->string('documents_cta_heading')->nullable();
            });
        }

        if (!Schema::hasColumn('country_pages', 'documents_cta_content')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->longText('documents_cta_content')->nullable();
            });
        }
    }

    public function down(): void
    {
        $columns = [
            'documents_heading',
            'documents_intro',
            'documents_items',
            'documents_note',
            'documents_cta_heading',
            'documents_cta_content',
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