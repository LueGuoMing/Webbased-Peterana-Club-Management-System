<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request\RoomStoreRequest;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //
    public function index()
    {
        //
        $rooms = Room::all();
        return view('member.rooms.index', compact('rooms'));
    }
}
