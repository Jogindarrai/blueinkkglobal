<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    if (!Schema::hasColumn('country_pages', 'governing_law_heading')) {
        Schema::table('country_pages', function (Blueprint $table) {
            $table->string('governing_law_heading')->nullable();
        });
    }

    // governing_law_content pehle se database mein hai,
    // isliye dobara add nahi karna.

    if (!Schema::hasColumn('country_pages', 'who_can_apply_heading')) {
        Schema::table('country_pages', function (Blueprint $table) {
            $table->string('who_can_apply_heading')->nullable();
        });
    }

    // who_can_apply_content bhi pehle se ho sakta hai,
    // isliye safe check rakha hai.
    if (!Schema::hasColumn('country_pages', 'who_can_apply_content')) {
        Schema::table('country_pages', function (Blueprint $table) {
            $table->longText('who_can_apply_content')->nullable();
        });
    }

    if (!Schema::hasColumn('country_pages', 'who_can_apply_note')) {
        Schema::table('country_pages', function (Blueprint $table) {
            $table->longText('who_can_apply_note')->nullable();
        });
    }
}

public function down(): void
{
    $columns = [
        'governing_law_heading',
        'who_can_apply_heading',
        'who_can_apply_note',
    ];

    foreach ($columns as $column) {
        if (Schema::hasColumn('country_pages', $column)) {
            Schema::table('country_pages', function (Blueprint $table) use ($column) {
                $table->dropColumn($column);
            });
        }
    }
}
};