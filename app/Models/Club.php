<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'description'];

    public function advertisements()
    {
        return $this->hasMany(Advertisement::class);
    }

    public function members()
    {
        return $this->hasMany(User::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function documentations()
    {
        return $this->hasMany(Documentation::class);
    }
}
