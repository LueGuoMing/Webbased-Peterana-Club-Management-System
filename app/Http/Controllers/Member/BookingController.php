<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BookingStoreRequest;
use App\Models\Booking;
use App\Models\Room;
use App\Models\Club;
use App\Models\Advertisement;
use Carbon\Carbon;
use App\Enums\RoomStatus;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bookings = Booking::all();
        return view('member.bookings.index', compact('bookings'));
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $rooms = Room::where('status',RoomStatus::Avaliable)->get();
        $clubs = Club::all();
        //$rooms = Room::where('status',RoomStatus::Avaliable)->get();
        //$club = Club::where('id','$user->club')->get();
        $advertisements = Advertisement::all();
        return view('member.bookings.create', compact('rooms','clubs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingStoreRequest $request)
    {
        //
        $room = Room::findOrFail($request->room_id);
        Club::findOrFail($request->club_id);
        Advertisement::findOrFail($request->advertisement_id);

        if($request->guest_number > 50){
            return back()->with('danger','Fail to book! The maximum number of guest is 50');
        }
        $request_date = Carbon::parse($request->booking_date);
        foreach ($room->bookings as $booking) {
            if($booking->booking_date->format('Y-m-d') == $request_date->format('Y-m-d')){
                return back()->with('danger','Fail to book! This room is reserved for this date');
            }
        }

        Booking::create($request->validated());
        return to_route('member.rooms.index')->with('sucess','Booking created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
        $booking->delete();

        return to_route('member.bookings.index')->with('warning','Booking deleted successfully');
    }

}

