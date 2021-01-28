@extends('allstickynotes.layout')

@section('headerContent')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/create.css') }}" />
    <header class="header">
            <div class="left">
                <ul class="navbar">
                    <b>
                        <li><a href="/" >Home</a></li>
                        <li><a href="/stickynotes">All Notes</a></li>
                        <li><a href="/about">About</a></li>
                    </b>
                </ul>
            </div>
    </header>

@endsection


@section('content')
    <div class="box_container">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/create.css') }}" />
        <h1 class="title_header" >Write New Note</h1>

        <x-alert/>
        <div id="input_form">
            <form method="post" action="/stickynotes/create" >
                @csrf
                <input type="text" name="title" class="input_title">
                <input type="submit" value="Create" class="create_button">
            </form>
        </div>


        <div class="back_button_container">
            <a  href="/stickynotes" class="back_button" > Back</a>
        </div>
    
    </div>
@endsection