<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
    if (! Schema::hasColumn('country_pages', 'hero_heading')) {
        Schema::table('country_pages', function (Blueprint $table) {
            $table->string('hero_heading')->nullable()->after('meta_description');
        });
    }
}

public function down(): void
{
    if (Schema::hasColumn('country_pages', 'hero_heading')) {
        Schema::table('country_pages', function (Blueprint $table) {
            $table->dropColumn('hero_heading');
        });
    }
}
};
