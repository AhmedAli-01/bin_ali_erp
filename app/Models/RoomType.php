<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    //
    protected $fillable = [
        'name',
        'base_price_per_night',
        'max_capacity'
    ];
}
