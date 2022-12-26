<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Room;
use App\Models\Club;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use App\Enums\RoomStatus;

class BookingController extends Controller
{
    //
    public function stepOne(Request $request)
    {
        $booking = $request->session()->get('booking');
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();
        return view('guest.bookings.step-one',compact('booking','min_date','max_date'));
    }

    public function storeStepOne(Request $request)
    {
        $validated = $request->validate([
            'first_name'=>['required'],
            'last_name'=>['required'],
            'email'=>['required','email'],
            'tel_number'=>['required'],
            'booking_date'=>['required', 'date', new DateBetween, new TimeBetween],
            'guest_number'=>['required']
        ]);

        if(empty($request->session()->get('booking')))
        {
            $booking = new Booking();
            $booking->fill($validated);
            $request->session()->put('booking',$booking);
        }
        else
        {
            $booking = $request->session()->get('booking');
            $booking->fill($validated);
            $request->session()->put('booking',$booking);
        }

        return to_route('guest.bookings.step.two');
    }

    public function stepTwo(Request $request)
    {
        $booking = $request->session()->get('booking');
        $booking_room_ids = Booking::orderBy('booking_date')->get()->filter(function($value) use ($booking){
            return $value->booking_date->format('Y-m-d') == $booking->booking_date->format('Y-m-d');
        })->pluck('room_id');
        $rooms = Room::where('status',RoomStatus::Avaliable)
                    ->whereNotIn('id',$booking_room_ids)->get();
        $clubs = Club::all();
        $advertisements = Advertisement::all();
        return view('guest.bookings.step-two',compact('rooms','booking','clubs','advertisements'));
    }

    public function storeStepTwo(Request $request)
    {
        $validated = $request->validate([
            'room_id'=>['required'],
            'club_id'=>['required'],
            'advertisement_id'=>['required'],
            'purpose'=>['required']
        ]);

        if(empty($request->session()->get('booking')))
        {
            $booking = new Booking();
            $booking->fill($validated);
            $request->session()->put('booking',$booking);
        }
        else
        {
            $booking = $request->session()->get('booking');
            $booking->fill($validated);
            $booking->save();
            $request->session()->forget('booking');
        }

        return to_route('thankyou');
    }
}
