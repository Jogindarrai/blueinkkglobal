<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $columns = [
            'country_name' => fn (Blueprint $table) =>
                $table->string('country_name')->nullable(),

            'country_flag' => fn (Blueprint $table) =>
                $table->string('country_flag', 20)->nullable(),

            'menu_region' => fn (Blueprint $table) =>
                $table->string('menu_region')->nullable(),

            'is_popular_destination' => fn (Blueprint $table) =>
                $table->boolean('is_popular_destination')->default(false),

            'show_in_menu' => fn (Blueprint $table) =>
                $table->boolean('show_in_menu')->default(true),

            'menu_order' => fn (Blueprint $table) =>
                $table->unsignedInteger('menu_order')->default(0),
        ];

        foreach ($columns as $column => $definition) {
            if (!Schema::hasColumn('country_pages', $column)) {
                Schema::table(
                    'country_pages',
                    function (Blueprint $table) use ($definition) {
                        $definition($table);
                    }
                );
            }
        }
    }

    public function down(): void
    {
        $columns = [
            'country_name',
            'country_flag',
            'menu_region',
            'is_popular_destination',
            'show_in_menu',
            'menu_order',
        ];

        foreach ($columns as $column) {
            if (Schema::hasColumn('country_pages', $column)) {
                Schema::table(
                    'country_pages',
                    function (Blueprint $table) use ($column) {
                        $table->dropColumn($column);
                    }
                );
            }
        }
    }
};