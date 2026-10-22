<?php

namespace App\Filament\Resources\CountryPages\Pages;

use App\Filament\Resources\CountryPages\CountryPageResource;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
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
                ->url(fn (): string => route('country.show', [
                    'slug' => $this->record->slug,
                ]))
                ->visible(fn (): bool => (bool) $this->record->is_active)
                ->openUrlInNewTab(),

            DeleteAction::make(),
        ];
    }
}