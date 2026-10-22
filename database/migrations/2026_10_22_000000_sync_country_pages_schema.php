<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('country_pages')) {
            return;
        }

        $columns = [
            'country_adjective' => fn (Blueprint $table) => $table->string('country_adjective', 100)->nullable(),
            'country_code' => fn (Blueprint $table) => $table->string('country_code', 10)->nullable(),
            'meta_title' => fn (Blueprint $table) => $table->string('meta_title')->nullable(),
            'meta_description' => fn (Blueprint $table) => $table->text('meta_description')->nullable(),
            'hero_heading' => fn (Blueprint $table) => $table->string('hero_heading')->nullable(),
            'hero_description' => fn (Blueprint $table) => $table->text('hero_description')->nullable(),
            'trademark_authority' => fn (Blueprint $table) => $table->string('trademark_authority')->nullable(),
            'application_type' => fn (Blueprint $table) => $table->string('application_type', 100)->nullable(),
            'local_agent' => fn (Blueprint $table) => $table->string('local_agent', 100)->nullable(),
            'registration_validity' => fn (Blueprint $table) => $table->string('registration_validity', 100)->nullable(),
            'why_register_heading' => fn (Blueprint $table) => $table->string('why_register_heading')->nullable(),
            'why_register_items' => fn (Blueprint $table) => $table->json('why_register_items')->nullable(),
            'governing_law_heading' => fn (Blueprint $table) => $table->string('governing_law_heading')->nullable(),
            'governing_law_content' => fn (Blueprint $table) => $table->longText('governing_law_content')->nullable(),
            'who_can_apply_heading' => fn (Blueprint $table) => $table->string('who_can_apply_heading')->nullable(),
            'who_can_apply_content' => fn (Blueprint $table) => $table->longText('who_can_apply_content')->nullable(),
            'who_can_apply_note' => fn (Blueprint $table) => $table->longText('who_can_apply_note')->nullable(),
            'documents_heading' => fn (Blueprint $table) => $table->string('documents_heading')->nullable(),
            'documents_intro' => fn (Blueprint $table) => $table->longText('documents_intro')->nullable(),
            'documents_items' => fn (Blueprint $table) => $table->json('documents_items')->nullable(),
            'documents_note' => fn (Blueprint $table) => $table->longText('documents_note')->nullable(),
            'documents_cta_heading' => fn (Blueprint $table) => $table->string('documents_cta_heading')->nullable(),
            'documents_cta_content' => fn (Blueprint $table) => $table->longText('documents_cta_content')->nullable(),
            'filing_process_heading' => fn (Blueprint $table) => $table->string('filing_process_heading')->nullable(),
            'filing_process_steps' => fn (Blueprint $table) => $table->json('filing_process_steps')->nullable(),
            'government_fees_heading' => fn (Blueprint $table) => $table->string('government_fees_heading')->nullable(),
            'government_fees_items' => fn (Blueprint $table) => $table->json('government_fees_items')->nullable(),
            'registration_time_heading' => fn (Blueprint $table) => $table->string('registration_time_heading')->nullable(),
            'registration_time_items' => fn (Blueprint $table) => $table->json('registration_time_items')->nullable(),
            'registration_time_content' => fn (Blueprint $table) => $table->longText('registration_time_content')->nullable(),
            'validity_renewal_heading' => fn (Blueprint $table) => $table->string('validity_renewal_heading')->nullable(),
            'validity_duration' => fn (Blueprint $table) => $table->string('validity_duration', 100)->nullable(),
            'validity_unit' => fn (Blueprint $table) => $table->string('validity_unit', 100)->nullable(),
            'validity_label' => fn (Blueprint $table) => $table->string('validity_label')->nullable(),
            'renewal_items' => fn (Blueprint $table) => $table->json('renewal_items')->nullable(),
            'refusal_heading' => fn (Blueprint $table) => $table->string('refusal_heading')->nullable(),
            'refusal_intro' => fn (Blueprint $table) => $table->text('refusal_intro')->nullable(),
            'refusal_items' => fn (Blueprint $table) => $table->json('refusal_items')->nullable(),
            'help_label' => fn (Blueprint $table) => $table->string('help_label')->nullable(),
            'help_heading' => fn (Blueprint $table) => $table->string('help_heading')->nullable(),
            'help_content' => fn (Blueprint $table) => $table->longText('help_content')->nullable(),
            'help_items' => fn (Blueprint $table) => $table->json('help_items')->nullable(),
            'help_cta_heading' => fn (Blueprint $table) => $table->string('help_cta_heading')->nullable(),
            'help_cta_content' => fn (Blueprint $table) => $table->longText('help_cta_content')->nullable(),
            'help_cta_email' => fn (Blueprint $table) => $table->string('help_cta_email')->nullable(),
            'help_cta_button_text' => fn (Blueprint $table) => $table->string('help_cta_button_text')->nullable(),
            'help_cta_button_url' => fn (Blueprint $table) => $table->string('help_cta_button_url', 500)->nullable(),
            'legal_disclaimer' => fn (Blueprint $table) => $table->longText('legal_disclaimer')->nullable(),
            'country_flag' => fn (Blueprint $table) => $table->string('country_flag', 20)->nullable(),
            'menu_region' => fn (Blueprint $table) => $table->string('menu_region')->nullable(),
            'is_popular_destination' => fn (Blueprint $table) => $table->boolean('is_popular_destination')->default(false),
            'show_in_menu' => fn (Blueprint $table) => $table->boolean('show_in_menu')->default(true),
            'menu_order' => fn (Blueprint $table) => $table->unsignedInteger('menu_order')->default(0),
        ];

        foreach ($columns as $column => $definition) {
            if (! Schema::hasColumn('country_pages', $column)) {
                Schema::table('country_pages', function (Blueprint $table) use ($definition) {
                    $definition($table);
                });
            }
        }

        if (Schema::hasColumn('country_pages', 'is_active')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->boolean('is_active')->default(false)->change();
            });
        }
    }

    public function down(): void
    {
        // Intentionally empty: this synchronization migration must not remove live data.
    }
};
