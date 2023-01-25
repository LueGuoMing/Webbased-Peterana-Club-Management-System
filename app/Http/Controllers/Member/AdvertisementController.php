<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdvertisementStoreRequest;
use App\Models\Advertisement;
use App\Models\Club;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AdvertisementController extends Controller
{
    //
    public function index()
    {
        //
        $advertisements = Advertisement::all();
        return view('member.advertisements.index', compact('advertisements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
        $clubs = Club::where('name', Auth::user()->club->name)->get();
        return view('member.advertisements.create',compact('clubs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdvertisementStoreRequest $request)
    {
        //
        $image = $request->file('image')->store('public/advertisements');

        $advertisement = Advertisement::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
            'club_id' => $request->club_id,
        ]);

        return to_route('member.clubs.index')->with('success','Event created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advertisement)
    {
        //
        $clubs = Club::all();
        return view('member.advertisements.edit',compact('advertisement','clubs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        //
        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'club_id'=>'required',
        ]);
        $image = $advertisement->image;
        if($request->hasFile('image')){
            Storage::delete($advertisement->image);
            $image = $request->file('image')->store('public/advertisements');
        }

        $advertisement->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
            'club_id' => $request->club_id,
        ]);

        return to_route('member.clubs.index')->with('success','Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertisement $advertisement)
    {
        //
        Storage::delete($advertisement->image);
        $advertisement->bookings()->delete();
        $advertisement->delete();

        return to_route('member.clubs.index')->with('warning','Event deleted successfully');
    }
}
