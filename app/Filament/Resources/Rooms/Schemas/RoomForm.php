<?php

namespace App\Filament\Resources\Rooms\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class RoomForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('room_type_id')
                    ->required()
                    ->numeric(),
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
