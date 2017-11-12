<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Work;
use DB;

class WorksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Works';
        $works = Work::orderBy('created_at', 'asc')->paginate(10);

        return view('works.index', compact('title'))->with('works', $works);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Upload Work';
        return view('works.create')->with('title', $title);
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
        $work->author = auth()->user()->name;

        switch($request->input('status')) {
            case 0: $work->status = 'Finished'; break;
            case 1: $work->status = 'Ongoing'; break;
            default: $work->status = 'Discontinued';
        }

        $work->co_authors = '';
        $index = 1;
        while($request->input('author_'.$index) !== NULL) {
            $work->co_authors = $work->co_authors.$request->input('author_'.$index).',';
            $index++;
        }
        $work->co_authors = rtrim($work->co_authors,',');

        $work->tag = '';
        $index = 1;
        while($request->input('tag_'.$index) !== NULL) {
            $work->tag = $work->tag.$request->input('tag_'.$index).',';
            $index++;
        }
        $work->tag = rtrim($work->tag,',');

        $work->abstract = $request->input('abstract');
        $work->document = $fileNameToStore;
        $work->save();

        return redirect('/works');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $work = Work::find($id);
        if($work === NULL)
            return redirect('/works')->with('success', 'Work Created');
        else
            return view('works.show')->with('work', $work);
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
        $this->validate($request, [
            'study' => 'required',
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
        }

        // Update Work
        $work = Work::find($id);
        $work->study = $request->input('study');
        
        switch($request->input('status')) {
            case 0: $work->status = 'Finished'; break;
            case 1: $work->status = 'Ongoing'; break;
            default: $work->status = 'Discontinued';
        }

        $work->co_authors = '';
        for($i = 0; $i <= $request->input('num_authors'); $i++) {
            if($request->input('author_'.$i) !== NULL)
                $work->co_authors = $work->co_authors.$request->input('author_'.$i).',';
        }
        $work->co_authors = rtrim($work->co_authors,',');

        // $work->tag = '';
        // for($i = 0; $i < $request->input('num_authors'); $i++) {
        //     if($request->input('tag_'.$index) !== NULL)
        //         $work->tag = $work->tag.$request->input('tag_'.$index).',';
        // }
        
        $work->tag = rtrim($work->tag,',');

        $work->abstract = $request->input('abstract');
        if($request->hasFile('document')) {
            $work->document = $fileNameToStore;
        }
        $work->save();

        return redirect('/works')->with('success', 'Work Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::find($id);
        
        // Check for correct user
        if(auth()->user()->id !== $work->user_id) {
            return redirect('/works')->with('error', 'Unauthorized Page');
        }

        if($work->document != 'no-doc.png'){
            // Delete document
            Storage::delete('public/documents/'.$work->document);
        }

        $work->delete();
        return redirect('/works')->with('success', 'Work Removed');
    }
}
