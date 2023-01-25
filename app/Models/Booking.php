<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Booking extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'tel_number',
        'email',
        'booking_date',
        'purpose',
        'room_id',
        'club_id',
        'advertisement_id',
        'guest_number',
        'status'
    ];

    protected $dates = [
        'booking_date'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function advertisement()
    {
        return $this->belongsTo(Advertisement::class);
    }
}
