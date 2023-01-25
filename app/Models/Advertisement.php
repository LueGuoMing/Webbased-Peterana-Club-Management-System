<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'image','club_id'];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
