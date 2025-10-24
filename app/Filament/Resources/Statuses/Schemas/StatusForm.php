<?php

namespace App\Filament\Resources\Statuses\Schemas;

use App\Enums\Heroicon;
use App\Models\Status;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class StatusForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (string $operation, $state, $set) {
                        if ($operation !== 'create') {
                            return;
                        }
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->required()
                    ->unique(Status::class, 'slug', ignoreRecord: true),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('color')
                    ->required(),
                Select::make('icon')
                    ->options(Heroicon::getGroupedOptions())
                    ->searchable()
                    ->required()
                    ->placeholder('Select an icon')
                    ->preload(),
                TextInput::make('order')
                    ->default(1)
                    ->minValue(1)
                    ->numeric(),
            ]);
    }
}
