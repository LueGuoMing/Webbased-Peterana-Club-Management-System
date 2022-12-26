<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Club;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    //
    public function index()
    {
        $clubs = Club::all();
        $advertisements = Advertisement::all();
        return view('guest.advertisements.index',compact('clubs','advertisements'));
    }

    public function welcome()
    {
        $clubs = Club::all();
        $advertisements = Advertisement::all();
        return view('welcome',compact('clubs','advertisements'));
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
