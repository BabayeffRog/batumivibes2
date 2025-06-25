<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('category_id')
                    ->required()
                    ->numeric(),
                Select::make('type')
                    ->options([
            'transfer' => 'Transfer',
            'legal' => 'Legal',
            'management' => 'Management',
            'car_rental' => 'Car rental',
            'personal' => 'Personal',
        ])
                    ->required(),
                Textarea::make('title')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('price')
                    ->numeric()
                    ->default(null)
                    ->prefix('$'),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('icon')
                    ->default(null),
                Toggle::make('is_featured')
                    ->required(),
            ]);
    }
}
