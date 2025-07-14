<?php

namespace App\Filament\Resources\Properties\Schemas;

use Closure;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Tabs;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;

class PropertyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                Tabs::make('Languages')
                    ->tabs([
                        Tabs\Tab::make('EN')
                            ->label('English')
                            ->schema([
                                TextInput::make('title.en')
                                    ->label('Title')
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                    ->reactive()
                                    ->required(),
                                Textarea::make('description.en')->label('Description')->required(),
                            ]),
                        Tabs\Tab::make('TR')
                            ->label('Türkçe')
                            ->schema([
                                TextInput::make('title.tr')->label('Başlık')->required(),
                                Textarea::make('description.tr')->label('Açıklama'),
                            ]),
                        Tabs\Tab::make('RU')
                            ->label('Русский')
                            ->schema([
                                TextInput::make('title.ru')->label('Заголовок')->required(),
                                Textarea::make('description.ru')->label('Описание'),
                            ]),
                        Tabs\Tab::make('KA')
                            ->label('ქართული')
                            ->schema([
                                TextInput::make('title.ka')->label('სათაური')->required(),
                                Textarea::make('description.ka')->label('აღწერა'),
                            ]),
                    ])
                    ->columnSpanFull(),

                TextInput::make('slug')

                    ->required()
                    ->columnSpan(1),

                Hidden::make('is_slug_changed_manually')
                    ->default(false)
                    ->dehydrated(false),

                TextInput::make('location')
                    ->label('Location')
                    ->required()
                    ->columnSpan(1),

                TextInput::make('bedrooms')
                    ->label('Bedrooms')
                    ->numeric()
                    ->required()
                    ->columnSpan(1),

                TextInput::make('area')
                    ->label('Area (m²)')
                    ->numeric()
                    ->required()
                    ->columnSpan(1),

                TextInput::make('price')
                    ->label('Price')
                    ->numeric()
                    ->prefix('$')
                    ->required()
                    ->columnSpan(1),

                Select::make('purpose')
                    ->label('Purpose')
                    ->options([
                        'rent' => 'Rent',
                        'sale' => 'Sale',
                    ])
                    ->required()
                    ->columnSpan(1),

                Select::make('property_type')
                    ->label('Property Type')
                    ->options([
                        'villa' => 'Villa',
                        'apartment' => 'Apartment',
                        'studio' => 'Studio',
                        'commercial' => 'Commercial',
                    ])
                    ->required()
                    ->columnSpan(1),

                Toggle::make('is_featured')
                    ->label('Featured')
                    ->required()
                    ->columnSpan(1),

                FileUpload::make('gallery')
                    ->label('Gallery')
                    ->disk('public')
                    ->directory('property-gallery')
                    ->visibility('public')
                    ->multiple()
                    ->columnSpanFull(),
            ]);
    }
}
