<?php

namespace App\Filament\Resources\Pages\Schemas;

use App\Models\Enums\PageTemplate;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                MarkdownEditor::make('content')
                    ->columnSpanFull(),
                TextInput::make('title'),
                Select::make('template')
                    ->options(PageTemplate::class),
            ]);
    }
}
