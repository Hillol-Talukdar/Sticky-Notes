@extends('allstickynotes.layout')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/edit.css') }}" />
    
    <h1 class="header">Update this Note</h1>

    <x-alert/>
    <div id="input_form">
        <form method="post" action="{{'/stickynotes/'.$stickyNote->id.'/update'}}" >
            @csrf
            @method('patch')

            <input type="text" value="{{$stickyNote->title}}" name="title" >
            <input type="submit" value="Edit" class="edit_button">
        </form>
    </div>


    <div class="back_button_container">
        <a href="/stickynotes" class="back_button"> Back</a>
    </div>  

@endsection