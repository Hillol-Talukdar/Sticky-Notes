@extends('allstickynotes.layout')

@section('content')

    <div class="box_container">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/index.css') }}" />

        <div class="header">
            <h1>All your notes</h1>
            <a class="create_new_button" href="/stickynotes/create"> Create New</a>
        </div>

        <x-alert />

        <div class="notes_container">
            <ul class="ul_container">

                @foreach($allnotes as $note)

                    <li id="note_list">
                        <p class="para_title"> {{ $note->title }} </p>

                        <div>
                            <a href="{{'/stickynotes/'.$note->id.'/edit'}}" class="edit_button"> Edit</a>
                            <a class="delete_button" href="{{'/stickynotes/'.$note->id.'/delete'}}">Delete</a>
                       
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
        
    </div>
@endsection