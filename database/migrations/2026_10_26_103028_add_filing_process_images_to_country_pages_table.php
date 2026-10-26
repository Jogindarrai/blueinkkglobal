<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('country_pages', 'filing_process_images')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->json('filing_process_images')
                    ->nullable()
                    ->after('filing_process_steps');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('country_pages', 'filing_process_images')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->dropColumn('filing_process_images');
            });
        }
    }
};