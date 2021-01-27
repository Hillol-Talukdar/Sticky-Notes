<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\StickyNote;

class StickyNoteController extends Controller
{
    public function index()
    {
        return view('allstickynotes.index');
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

        return redirect()->back()->with('message', 'Note Created Successfully');
    }

    public function edit()
    {
        return view('allstickynotes.edit');
    }

}
