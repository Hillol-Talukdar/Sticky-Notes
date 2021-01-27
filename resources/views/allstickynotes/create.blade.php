@extends('allstickynotes.layout')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/create.css') }}" />
    <h1 class="header" >Write your notes</h1>

    <x-alert/>
    <div id="input_form">
        <form method="post" action="/stickynotes/create" >
            @csrf
            <input type="text" name="title" >
            <input type="submit" value="Create" class="create_button">
        </form>
    </div>


    <div class="back_button">
        <a  href="/stickynotes" > Back</a>
    </div>
    
@endsection