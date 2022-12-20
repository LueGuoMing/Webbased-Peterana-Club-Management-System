<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdvertisementStoreRequest;
use App\Models\Advertisement;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $advertisements = Advertisement::all();
        return view('admin.advertisements.index', compact('advertisements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clubs = Club::all();
        return view('admin.advertisements.create',compact('clubs'));
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
        ]);

        if($request->has('clubs')){
            $advertisement->clubs()->attach($request->clubs);
        }
        return to_route('advertisements.index')->with('success','Advertisement created successfully');
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
    public function edit(Advertisement $advertisement)
    {
        //
        $clubs = Club::all();
        return view('admin.advertisements.edit',compact('advertisement','clubs'));
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
        ]);

        if($request->has('clubs')){
            $advertisement->clubs()->sync($request->clubs);
        }

        return to_route('advertisements.index')->with('success','Advertisement updated successfully');
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
        $advertisement->clubs()->detach();
        $advertisement->bookings()->delete();
        $advertisement->delete();

        return to_route('advertisements.index')->with('warning','Event and its venue reservation deleted successfully');

    }
}
