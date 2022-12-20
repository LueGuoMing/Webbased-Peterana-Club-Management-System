<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    //
    public function guest()
    {
        $advertisements = Advertisement::all();
        return view('advertisements.guest',compact('advertisements'));
    }
}
