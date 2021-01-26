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
        StickyNote::create($request->input());

        return redirect()->back();
    }

    public function edit()
    {
        return view('allstickynotes.edit');
    }
}
