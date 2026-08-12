<?php

namespace App\Filament\Resources\Leads\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class LeadForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('country'),
                TextInput::make('service'),
                Textarea::make('message')
                    ->columnSpanFull(),
                TextInput::make('source_page'),
                Textarea::make('source_url')
                    ->columnSpanFull(),
                Textarea::make('referrer_url')
                    ->columnSpanFull(),
                TextInput::make('status')
                    ->required()
                    ->default('new'),
                TextInput::make('assigned_to'),
                Textarea::make('admin_notes')
                    ->columnSpanFull(),
                TextInput::make('ip_address'),
                Textarea::make('user_agent')
                    ->columnSpanFull(),
                Textarea::make('additional_data')
                    ->columnSpanFull(),
            ]);
    }
}
