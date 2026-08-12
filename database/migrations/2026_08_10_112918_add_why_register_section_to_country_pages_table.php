<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('country_pages', function (Blueprint $table) {
            $table->string('why_register_heading')
                ->nullable()
                ->after('registration_validity');

            $table->json('why_register_items')
                ->nullable()
                ->after('why_register_heading');
        });
    }

    public function down(): void
    {
        Schema::table('country_pages', function (Blueprint $table) {
            $table->dropColumn([
                'why_register_heading',
                'why_register_items',
            ]);
        });
    }
};