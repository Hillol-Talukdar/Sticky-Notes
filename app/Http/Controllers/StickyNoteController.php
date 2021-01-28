<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\StickyNote;

class StickyNoteController extends Controller
{
    public function index()
    {
        $allnotes = StickyNote::all();

        return view('allstickynotes.index' , compact('allnotes'));
    }

    public function create()
    {
        return view('allstickynotes.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
        ]);

        StickyNote::create($request->input());

        return redirect('/stickynotes')->with('message', 'Note Created Successfully');
    }

    public function edit($id)
    {
        $stickyNote = StickyNote::find($id);
        return view('allstickynotes.edit',  compact('stickyNote'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|max:255',
        ]);

        $stickyNote = StickyNote::find($id);

        $stickyNote->update(['title' => $request->input('title')]);

        return redirect('/stickynotes')->with('message', 'Note Updated Successfully');
    }

    public function delete($id)
    {
        $stickyNote = StickyNote::find($id);

        $stickyNote->delete();

        return redirect('/stickynotes')->with('message', 'Note Deleted Successfully');
    }


}
