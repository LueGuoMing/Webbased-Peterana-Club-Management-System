<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClubDocumentationStoreRequest;
use App\Models\Club;
use App\Models\Documentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $documentations = Documentation::all();
        return view('admin.documentation.index',compact('documentations'));
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
        return view('admin.documentation.create',compact('clubs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClubDocumentationStoreRequest $request)
    {
        //
        $request->validate([
            'document' => 'required|file',
        ]);

        $fileName = request()->document->getClientOriginalName();

        $document = $request->document->storeAs('public/docs',$fileName);

        //$document = $request->file('document')->store('public/docs');

        Documentation::create([
            'title' => $request->title,
            'club_id' => $request->club_id,
            'document' => $document,
        ]);
        return to_route('documentation.index')->with('success','Document submitted successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function download(Documentation $documentation)
    {
        return Storage::download($documentation->document);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documentation $documentation)
    {
        //
        Storage::delete($documentation->document);
        $documentation->delete();

        return to_route('documentation.index')->with('warning','Documentation deleted successfully');
    }
}