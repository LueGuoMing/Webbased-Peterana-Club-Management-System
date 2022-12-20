<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller
{
    //
    public function guest()
    {
        $clubs = Club::all();
        return view('clubs.guest',compact('clubs'));
    }

    public function show(Club $club)
    {
        return view('clubs.show',compact('club'));
    }
}
