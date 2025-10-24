<?php

namespace App\Filament\Resources\Tickets\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TicketForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('created_by')
                    ->numeric(),
                TextInput::make('updated_by')
                    ->numeric(),
                TextInput::make('deleted_by')
                    ->numeric(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('ticket_number')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Select::make('status_id')
                    ->relationship('status', 'name'),
                Toggle::make('is_resolved')
                    ->required(),
                DateTimePicker::make('resolved_at'),
                TextInput::make('resolved_by')
                    ->numeric(),
                Textarea::make('resolution_description')
                    ->columnSpanFull(),
                TextInput::make('priority')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('type'),
                TextInput::make('assigned_to')
                    ->numeric(),
                TextInput::make('custom_data'),
            ]);
    }
}
