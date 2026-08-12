<?php

namespace App\Filament\Widgets;

use App\Models\CountryPage;
use App\Models\Lead;
use App\Models\User;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected int|string|array $columnSpan = 'full';

    protected function getStats(): array
    {
        return [
            Stat::make(
                'Total Country Pages',
                CountryPage::query()->count()
            )
                ->description('All country pages')
                ->descriptionIcon(Heroicon::OutlinedGlobeAlt)
                ->icon(Heroicon::OutlinedGlobeAlt)
                ->color('info'),

            Stat::make(
                'Total Users',
                User::query()->count()
            )
                ->description('Registered admin users')
                ->descriptionIcon(Heroicon::OutlinedUsers)
                ->icon(Heroicon::OutlinedUsers)
                ->color('success'),

            Stat::make(
                'Total Leads',
                Lead::query()->count()
            )
                ->description('All website enquiries')
                ->descriptionIcon(Heroicon::OutlinedInbox)
                ->icon(Heroicon::OutlinedInbox)
                ->color('warning'),
        ];
    }
}