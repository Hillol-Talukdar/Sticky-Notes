<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\StickyNote;

class StickyNoteController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }


    public function index()
    {
        // $allnotes = StickyNote::all();
        $allnotes = StickyNote::orderBy('completed')->get();

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

    public function complete($id)
    {

        $stickyNote = StickyNote::find($id);

        $stickyNote->update(['completed' => true]);

        return redirect('/stickynotes')->with('message', 'Note Marked as Completed');
    }

    public function incomplete($id)
    {

        $stickyNote = StickyNote::find($id);

        $stickyNote->update(['completed' => false]);

        return redirect('/stickynotes')->with('message', 'Note marked as incompleted');
    }

}
