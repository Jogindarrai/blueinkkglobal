<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Create the common leads table.
     */
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Lead Details
            |--------------------------------------------------------------------------
            */
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('country')->nullable();
            $table->string('service')->nullable();
            $table->text('message')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Lead Source
            |--------------------------------------------------------------------------
            |
            | source_page:
            | Form ka naam, jaise enquiry_modal, contact_page, country_page.
            |
            | source_url:
            | Exact URL jahan se form submit hua.
            |
            */
            $table->string('source_page')->nullable()->index();
            $table->text('source_url')->nullable();
            $table->text('referrer_url')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Lead Management
            |--------------------------------------------------------------------------
            */
            $table->string('status')
                ->default('new')
                ->index();

            $table->string('assigned_to')->nullable();
            $table->text('admin_notes')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Technical Information
            |--------------------------------------------------------------------------
            */
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Additional Form Data
            |--------------------------------------------------------------------------
            |
            | Alag-alag forms ke extra fields JSON format mein save kiye ja
            | sakte hain.
            |
            */
            $table->json('additional_data')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Remove the leads table.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};