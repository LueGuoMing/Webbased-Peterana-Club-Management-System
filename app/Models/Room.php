<?php

namespace App\Models;

use App\Enums\RoomStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['name','location','status'];

    protected $casts = [
        'status' => RoomStatus::class,
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
