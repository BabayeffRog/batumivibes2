<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Group;


class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Group::make([
                    TextInput::make('name.en')->label('Name (EN)')->required(),
                    TextInput::make('name.tr')->label('Name (TR)'),
                    TextInput::make('name.ru')->label('Name (RU)'),
                ])->columnSpanFull(),

                Group::make([
                    Textarea::make('description.en')->label('Description (EN)'),
                    Textarea::make('description.tr')->label('Description (TR)'),
                    Textarea::make('description.ru')->label('Description (RU)'),
                ])->columnSpanFull(),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('type')
                    ->required(),

                TextInput::make('icon'),

                Toggle::make('is_active')->label('Active')->default(true),
            ]);
    }
}
