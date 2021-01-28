@extends('allstickynotes.layout')

@section('headerContent')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/index.css') }}" />
    <header class="header">
            <div class="left">
                <ul class="navbar">
                    <b>
                        <li><a href="/" >Home</a></li>
                        <li><a href="/stickynotes" id="current_page">All Notes</a></li>
                        <li><a href="/about">About</a></li>
                    </b>
                </ul>
            </div>
    </header>

@endsection


@section('content')

    <div class="box_container">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/index.css') }}" />

        <div class="title_header">
            <h1>All Notes</h1>
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