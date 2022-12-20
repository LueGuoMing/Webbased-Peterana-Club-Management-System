<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClubStoreRequest;
use App\Models\Club;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clubs = Club::all();
        return view('admin.clubs.index', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClubStoreRequest $request)
    {
        //
        $image = $request->file('image')->store('public/clubs');

        Club::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
        ]);
        return to_route('clubs.index')->with('success','Club created successfully');
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
    public function edit(Club $club)
    {
        //
        return view('admin.clubs.edit', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        //
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        $image = $club->image;
        if($request->hasFile('image')){
            Storage::delete($club->image);
            $image = $request->file('image')->store('public/clubs');
        }

        $club->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
        ]);
        return to_route('clubs.index')->with('success','Club updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        //
        Storage::delete($club->image);
        $club->advertisements()->delete();
        $club->members()->delete();
        $club->bookings()->delete();
        $club->delete();

        return to_route('clubs.index')->with('warning','Club deleted successfully')->with('danger','Member, Advertisement, bookings with this club deleted');
    }
}
