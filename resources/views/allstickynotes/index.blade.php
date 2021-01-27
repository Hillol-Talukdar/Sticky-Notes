@extends('allstickynotes.layout')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/index.css') }}" />
    
    <div class="header">
        <h1 >All your notes</h1>
        <a class="create_new_button" href="/stickynotes/create"> Create New</a>
    </div>

    <ul>
        @foreach($allnotes as $note)
            <li>
                {{ $note->title }}
            </li>
        @endforeach

    </ul>

@endsection




