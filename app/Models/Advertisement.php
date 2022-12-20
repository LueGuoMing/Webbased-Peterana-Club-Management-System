<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'image'];

    public function clubs()
    {
        return $this->belongsToMany(Club::class,'club_advertisement');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
