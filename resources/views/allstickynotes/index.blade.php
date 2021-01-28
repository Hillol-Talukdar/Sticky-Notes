@extends('allstickynotes.layout')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/index.css') }}" />
    
    <div class="header">
        <h1 >All your notes</h1>
        <a class="create_new_button" href="/stickynotes/create"> Create New</a>
    </div>

    <ul class="ul_container">
        <x-alert/>
        
        @foreach($allnotes as $note)
 
            <!-- <div> 
                <a class="done_button">Done</a> 
            </div>    -->

            <li id="note_list">
                <p> {{ $note->title }} </p>

                <div>
                    <a href="{{'/stickynotes/'.$note->id.'/edit'}}" class="edit_button"> Edit</a>


                    <a class="delete_button" href="{{'/stickynotes/'.$note->id.'/delete'}}">Delete</a>

                </div>

            </li>
        @endforeach

    </ul>

@endsection
