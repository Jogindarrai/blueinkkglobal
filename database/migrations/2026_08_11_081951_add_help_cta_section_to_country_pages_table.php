<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
{
    $columns = [
        'help_label' => fn (Blueprint $table) =>
            $table->string('help_label')->nullable(),

        'help_heading' => fn (Blueprint $table) =>
            $table->string('help_heading')->nullable(),

        'help_content' => fn (Blueprint $table) =>
            $table->longText('help_content')->nullable(),

        'help_items' => fn (Blueprint $table) =>
            $table->json('help_items')->nullable(),

        'help_cta_heading' => fn (Blueprint $table) =>
            $table->string('help_cta_heading')->nullable(),

        'help_cta_content' => fn (Blueprint $table) =>
            $table->longText('help_cta_content')->nullable(),

        'help_cta_email' => fn (Blueprint $table) =>
            $table->string('help_cta_email')->nullable(),

        'help_cta_button_text' => fn (Blueprint $table) =>
            $table->string('help_cta_button_text')->nullable(),

        'help_cta_button_url' => fn (Blueprint $table) =>
            $table->string('help_cta_button_url', 500)->nullable(),

        'legal_disclaimer' => fn (Blueprint $table) =>
            $table->longText('legal_disclaimer')->nullable(),
    ];

    foreach ($columns as $column => $definition) {
        if (!Schema::hasColumn('country_pages', $column)) {
            Schema::table('country_pages', function (Blueprint $table) use ($definition) {
                $definition($table);
            });
        }
    }
}

    public function down(): void
    {
        Schema::table('country_pages', function (Blueprint $table) {
            $table->dropColumn([
                'help_label',
                'help_heading',
                'help_content',
                'help_items',
                'help_cta_heading',
                'help_cta_content',
                'help_cta_email',
                'help_cta_button_text',
                'help_cta_button_url',
                'legal_disclaimer',
            ]);
        });
    }
};