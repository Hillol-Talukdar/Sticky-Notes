@extends('allstickynotes.layout')

@section('headerContent')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/home.css') }}" />
    <header class="header">
        <div class="left">
            <ul class="navbar">
                <b>
                    <li><a href="/" id="current_page">Home</a></li>
                    <li><a href="/stickynotes">All Notes</a></li>
                    <li><a href="/about">About</a></li>
                </b>
            </ul>
        </div>
    </header>

    <div class="container">
        <div class="box_container">
            <h1>Sticky Notes</h1>
            <a href="/stickynotes" class="get_started">Let's Make Notes</a>
        </div>
    </div>

@endsection