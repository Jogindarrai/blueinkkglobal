<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('country_pages', 'refusal_heading')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->string('refusal_heading')->nullable();
            });
        }

        if (!Schema::hasColumn('country_pages', 'refusal_intro')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->text('refusal_intro')->nullable();
            });
        }

        if (!Schema::hasColumn('country_pages', 'refusal_items')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->json('refusal_items')->nullable();
            });
        }
    }

    public function down(): void
    {
        $columns = [
            'refusal_heading',
            'refusal_intro',
            'refusal_items',
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