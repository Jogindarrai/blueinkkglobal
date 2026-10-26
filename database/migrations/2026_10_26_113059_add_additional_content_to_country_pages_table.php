<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('country_pages', 'additional_content')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->longText('additional_content')
                    ->nullable()
                    ->after('filing_process_image');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('country_pages', 'additional_content')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->dropColumn('additional_content');
            });
        }
    }
};