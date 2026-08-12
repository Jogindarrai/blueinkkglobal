<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('country_pages', 'validity_renewal_heading')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->string('validity_renewal_heading')->nullable();
            });
        }

        if (!Schema::hasColumn('country_pages', 'validity_duration')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->string('validity_duration', 100)->nullable();
            });
        }

        if (!Schema::hasColumn('country_pages', 'validity_unit')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->string('validity_unit', 100)->nullable();
            });
        }

        if (!Schema::hasColumn('country_pages', 'validity_label')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->string('validity_label')->nullable();
            });
        }

        if (!Schema::hasColumn('country_pages', 'renewal_items')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->json('renewal_items')->nullable();
            });
        }
    }

    public function down(): void
    {
        $columns = [
            'validity_renewal_heading',
            'validity_duration',
            'validity_unit',
            'validity_label',
            'renewal_items',
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