<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
        'room_type_id',
        'room_number',
        'floor_number',
        'current_status',
        'is_clean',
        'last_cleaned_at'
    ];

    // app/Models/Room.php

    public function roomType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\RoomType::class);
    }
}
