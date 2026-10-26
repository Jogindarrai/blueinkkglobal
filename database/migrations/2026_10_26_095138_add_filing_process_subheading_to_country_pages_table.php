<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('country_pages', 'filing_process_subheading')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->text('filing_process_subheading')
                    ->nullable()
                    ->after('filing_process_heading');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('country_pages', 'filing_process_subheading')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->dropColumn('filing_process_subheading');
            });
        }
    }
};