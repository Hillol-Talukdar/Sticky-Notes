@extends('allstickynotes.layout')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/edit.css') }}" />
    
    <h1>Update this Note</h1>

    <x-alert/>
    <div id="input_form">
        <form method="post" action="{{'/stickynotes/'.$stickyNote->id.'/update'}}" >
            @csrf
            @method('patch')

            <input type="text" value="{{$stickyNote->title}}" name="title" >
            <input type="submit" value="Edit" class="Edit_button">
        </form>
    </div>


    <a class="back_button" href="/stickynotes"> Back</a>

@endsection