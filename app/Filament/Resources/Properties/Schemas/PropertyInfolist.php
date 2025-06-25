<?php

namespace App\Filament\Resources\Properties\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Schema;

class PropertyInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('gallery'),
                TextEntry::make('slug'),
                TextEntry::make('location'),
                TextEntry::make('bedrooms')
                    ->numeric(),
                TextEntry::make('area')
                    ->numeric(),
                TextEntry::make('type'),
                TextEntry::make('price')
                    ->money(),
                IconEntry::make('is_featured')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
