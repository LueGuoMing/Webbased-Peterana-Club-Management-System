<?php

namespace App\Http\Controllers\Admin;

use App\Enums\RoomStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookingStoreRequest;
use App\Models\Booking;
use App\Models\Room;
use App\Models\Club;
use App\Models\Advertisement;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Notifications\ApproveBookingNotification;
use App\Notifications\RejectBookingNotification;

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
        return view('admin.bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $rooms = Room::where('status',RoomStatus::Avaliable)->get();
        $clubs = Club::all();
        //$club = $request->session('club_id')->get('club');
        //$advertisements = Advertisement::where('club_id',session()->get('club_id'))->get();
        $advertisements = Advertisement::all();
        return view('admin.bookings.create', compact('rooms','clubs','advertisements'));
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
        $clubs = Club::all();

        if($request->guest_number > 50){
            return back()->with('danger','Fail to book! The maximum number of guest is 50');
        }

        /** 
        foreach($clubs as $club) {
            foreach($club->advertisements as $advertisement)
            {
                if($advertisement->title != $request->title)
                {
                    return back()->with('danger','The event is not belong to the club');
                }
            }
        }  
        */
        

        $request_date = Carbon::parse($request->booking_date);
        foreach ($room->bookings as $booking) {
            if($booking->booking_date->format('Y-m-d') == $request_date->format('Y-m-d')){
                return back()->with('danger','Fail to book! This room is reserved for this date');
            }
        }

        Booking::create(
            $request->validated()
            //'status' => BookingStatus::Pending
        );
        return to_route('bookings.index')->with('success','Booking created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    
    public function approve($id)
    {
        //
        $booking=Booking::find($id);
        $booking->status = 'Approved';
        $booking->save();

        $details = [
            'name' => $booking->first_name,
        ];

        $booking->notify(new ApproveBookingNotification($details));
        return to_route('bookings.index')->with('success','Approved successfully');
    }

    public function reject($id)
    {
        //
        $booking=Booking::find($id);
        $booking->status = 'Rejected';
        $booking->save();

        $details = [
            'name' => $booking->first_name,
        ];

        $booking->notify(new RejectBookingNotification($details));
        return to_route('bookings.index')->with('warning','Rejected successfully');
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

        return to_route('bookings.index')->with('warning','Booking deleted successfully');
    }
}
