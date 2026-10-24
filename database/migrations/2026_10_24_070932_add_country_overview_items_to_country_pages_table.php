<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('country_pages', 'country_overview_items')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->json('country_overview_items')
                    ->nullable()
                    ->after('hero_description');
            });
        }

        /*
         * Purane four fields ka existing data repeater mein transfer karega.
         */
        DB::table('country_pages')
            ->select([
                'id',
                'trademark_authority',
                'application_type',
                'local_agent',
                'registration_validity',
            ])
            ->orderBy('id')
            ->each(function ($country): void {
                $items = collect([
                    [
                        'heading' => 'Trademark Authority',
                        'value' => $country->trademark_authority,
                    ],
                    [
                        'heading' => 'Application Type',
                        'value' => $country->application_type,
                    ],
                    [
                        'heading' => 'Local Agent',
                        'value' => $country->local_agent,
                    ],
                    [
                        'heading' => 'Registration Validity',
                        'value' => $country->registration_validity,
                    ],
                ])
                    ->filter(fn (array $item): bool => filled($item['value']))
                    ->values()
                    ->all();

                if ($items !== []) {
                    DB::table('country_pages')
                        ->where('id', $country->id)
                        ->update([
                            'country_overview_items' => json_encode($items),
                        ]);
                }
            });
    }

    public function down(): void
    {
        if (Schema::hasColumn('country_pages', 'country_overview_items')) {
            Schema::table('country_pages', function (Blueprint $table) {
                $table->dropColumn('country_overview_items');
            });
        }
    }
};