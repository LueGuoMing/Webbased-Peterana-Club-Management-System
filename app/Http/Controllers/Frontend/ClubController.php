<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller
{
    //
    public function index()
    {
        $clubs = Club::all();
        return view('guest.clubs.index',compact('clubs'));
    }

    public function show(Club $club)
    {
        return view('guest.clubs.show',compact('club'));
    }
}
