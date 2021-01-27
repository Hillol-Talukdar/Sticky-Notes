@extends('allstickynotes.layout')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/index.css') }}" />
    
    <div class="header">
        <h1 >All your notes</h1>
        <a class="create_new_button" href="/stickynotes/create"> Create New</a>
    </div>

    <ul>
        <x-alert/>
        @foreach($allnotes as $note)
            <li id="note_list">
                <p> {{ $note->title }} </p>
                <a href="{{'/stickynotes/'.$note->id.'/edit'}}" class="edit_button"> Edit</a>
            </li>
        @endforeach

    </ul>

@endsection
