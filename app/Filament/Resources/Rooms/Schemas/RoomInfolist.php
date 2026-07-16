<?php

namespace App\Filament\Resources\Rooms\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class RoomInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('room_type_id')
                    ->numeric(),
                TextEntry::make('room_number'),
                TextEntry::make('floor_number'),
                TextEntry::make('current_status'),
                IconEntry::make('is_clean')
                    ->boolean(),
                TextEntry::make('last_cleaned_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
