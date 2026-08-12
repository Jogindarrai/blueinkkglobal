<?php

namespace App\Filament\Resources\CountryPages\Pages;

use App\Filament\Resources\CountryPages\CountryPageResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Support\Enums\Width;

class CreateCountryPage extends CreateRecord
{
    protected static string $resource = CountryPageResource::class;

    public function getMaxContentWidth(): Width|string|null
    {
        return Width::Full;
    }
}
