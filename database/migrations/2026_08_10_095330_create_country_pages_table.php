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
    Schema::create('country_pages', function (Blueprint $table) {
        $table->id();

        $table->string('country_name', 100);
        $table->string('country_adjective', 100)->nullable();
        $table->string('slug', 150)->unique();
        $table->string('country_code', 10)->nullable();

        $table->string('meta_title')->nullable();
        $table->text('meta_description')->nullable();
        $table->text('hero_description')->nullable();

        $table->string('trademark_authority')->nullable();
        $table->string('application_type', 100)->nullable();
        $table->string('local_agent', 100)->nullable();
        $table->string('registration_validity', 100)->nullable();

        $table->longText('governing_law_content')->nullable();
        $table->longText('who_can_apply_content')->nullable();
        $table->longText('documents_content')->nullable();
        $table->longText('filing_process_content')->nullable();
        $table->longText('fees_content')->nullable();
        $table->longText('timeline_content')->nullable();
        $table->longText('renewal_content')->nullable();
        $table->longText('refusal_content')->nullable();
        $table->longText('help_content')->nullable();
        $table->longText('disclaimer_content')->nullable();

        $table->boolean('is_active')->default(true);
        $table->unsignedInteger('sort_order')->default(0);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country_pages');
    }
};
