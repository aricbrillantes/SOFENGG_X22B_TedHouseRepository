<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Work;
use DB;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::orderBy('created_at', 'asc')->paginate(10);
        return view('works.index')->with('works', $works);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'study' => 'required',
            'author' => 'required',
            'abstract' => 'required',
            'status' => 'required',
            'document' => 'nullable|max:24999'
        ]);

        // Handle File Upload
        if($request->hasFile('document')) {
            // Get filename with extension
            $filenameWithExt = $request->file('document')->getClientOriginalName();
            
            // Get filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
            // Get extension
            $extension = $request->file('document')->getClientOriginalExtension();
            
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            
            // Upload image
            $path = $request->file('document')->storeAs('public/documents', $fileNameToStore);
        } else {
            $fileNameToStore = 'no-doc.png';
        }

        // Create work
        $work = new Work();
        $work->user_id = auth()->user()->id;
        $work->study = $request->input('study');
        $work->author = $request->input('author');
        $work->status = $request->input('status');
        $work->abstract = $request->input('abstract');
        $work->document = $fileNameToStore;
        $work->save();

        return redirect('/works')->with('success', 'Work Created');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
