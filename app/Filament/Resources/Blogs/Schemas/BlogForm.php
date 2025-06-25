<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Set;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Tabs::make('Languages')->tabs([
                Tab::make('EN')->schema([
                    TextInput::make('title.en')
                        ->label('Title (EN)')
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                        ->required(),

                    Textarea::make('content.en')->label('Content (EN)')->rows(6),
                    TextInput::make('seo_title.en')->label('SEO Title (EN)'),
                    TextInput::make('seo_description.en')->label('SEO Description (EN)'),
                ]),

                Tab::make('RU')->schema([
                    TextInput::make('title.ru')->label('Заголовок (RU)'),
                    Textarea::make('content.ru')->label('Контент (RU)')->rows(6),
                    TextInput::make('seo_title.ru')->label('SEO Заголовок (RU)'),
                    TextInput::make('seo_description.ru')->label('SEO Описание (RU)'),
                ]),

                Tab::make('TR')->schema([
                    TextInput::make('title.tr')->label('Başlık (TR)'),
                    Textarea::make('content.tr')->label('İçerik (TR)')->rows(6),
                    TextInput::make('seo_title.tr')->label('SEO Başlık (TR)'),
                    TextInput::make('seo_description.tr')->label('SEO Açıklama (TR)'),
                ]),
            ])->columnSpanFull(),

            FileUpload::make('image')
                ->label('Images')
                ->image()
                ->multiple()
                ->disk('public')
                ->directory('blogs') // => /storage/blogs/
                ->preserveFilenames()
                ->reorderable()
                ->maxFiles(10)
                ->columnSpanFull(),

            TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true),

            DatePicker::make('published_at')->label('Yayımlanma Tarixi'),
        ]);
    }
}
