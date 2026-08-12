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
    Schema::table('country_pages', function (Blueprint $table) {
        $table->string('hero_heading')->nullable()->after('meta_description');
    });
}

public function down(): void
{
    Schema::table('country_pages', function (Blueprint $table) {
        $table->dropColumn('hero_heading');
    });
}
};
