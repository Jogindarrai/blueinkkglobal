<?php

namespace App\Filament\Resources\CountryPages\Pages;

use App\Filament\Resources\CountryPages\CountryPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCountryPages extends ListRecords
{
    protected static string $resource = CountryPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
