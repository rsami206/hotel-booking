<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
     protected $fillable = [
        'room_number',
        'type',
        'price_per_night',
        'description',
        'image',
        'status',
    ];
}
