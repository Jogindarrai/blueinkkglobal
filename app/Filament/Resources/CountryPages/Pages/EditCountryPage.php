<?php

namespace App\Filament\Resources\CountryPages\Pages;

use App\Filament\Resources\CountryPages\CountryPageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Filament\Support\Enums\Width;

class EditCountryPage extends EditRecord
{
    protected static string $resource = CountryPageResource::class;

    public function getMaxContentWidth(): Width|string|null
    {
        return Width::Full;
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('openPage')
                ->label('Open live page')
                ->icon('heroicon-o-arrow-top-right-on-square')
                ->color('gray')
                ->url(fn () => route('country.show', [
                    'slug' => $this->record->slug,
                ]))
                ->openUrlInNewTab(),
            DeleteAction::make(),
        ];
    }
}
