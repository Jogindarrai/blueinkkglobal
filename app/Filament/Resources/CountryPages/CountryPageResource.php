<?php

namespace App\Filament\Resources\CountryPages;

use App\Filament\Resources\CountryPages\Pages\CreateCountryPage;
use App\Filament\Resources\CountryPages\Pages\EditCountryPage;
use App\Filament\Resources\CountryPages\Pages\ListCountryPages;
use App\Filament\Resources\CountryPages\Schemas\CountryPageForm;
use App\Filament\Resources\CountryPages\Tables\CountryPagesTable;
use App\Models\CountryPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CountryPageResource extends Resource
{
    protected static ?string $model = CountryPage::class;

    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedGlobeAlt;

    protected static ?string $navigationLabel = 'Country Pages';

    protected static ?string $modelLabel = 'Country Page';

    protected static ?string $pluralModelLabel = 'Country Pages';

    protected static ?string $recordTitleAttribute = 'country_name';

    protected static ?int $navigationSort = 5;

    public static function form(Schema $schema): Schema
    {
        return CountryPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CountryPagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCountryPages::route('/'),
            'create' => CreateCountryPage::route('/create'),
            'edit' => EditCountryPage::route('/{record}/edit'),
        ];
    }
}