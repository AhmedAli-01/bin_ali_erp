<?php

namespace App\Filament\Resources\Rooms\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select; // <- Added this import
use Filament\Schemas\Schema;

class RoomForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Swapped TextInput for Select and linked the relationship
                Select::make('room_type_id')
                    ->relationship('roomType', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),

                TextInput::make('room_number')
                    ->required(),
                TextInput::make('floor_number')
                    ->required(),
                TextInput::make('current_status')
                    ->required()
                    ->default('Available'),
                Toggle::make('is_clean')
                    ->required(),
                DateTimePicker::make('last_cleaned_at'),
            ]);
    }
}