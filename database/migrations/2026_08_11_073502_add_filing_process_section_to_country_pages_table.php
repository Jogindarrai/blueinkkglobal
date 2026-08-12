<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('country_pages', 'filing_process_heading')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->string('filing_process_heading')->nullable();
            });
        }

        if (!Schema::hasColumn('country_pages', 'filing_process_steps')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->json('filing_process_steps')->nullable();
            });
        }
    }

    public function down(): void
    {
        $columns = [
            'filing_process_heading',
            'filing_process_steps',
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