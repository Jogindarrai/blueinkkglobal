<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('country_pages', 'supplementary_content')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->longText('supplementary_content')
                    ->nullable()
                    ->after('additional_content');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('country_pages', 'supplementary_content')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->dropColumn('supplementary_content');
            });
        }
    }
};