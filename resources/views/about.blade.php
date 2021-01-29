@extends('allstickynotes.layout')

@section('headerContent')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/about.css') }}" />
    <header class="header">
        <div class="left">
            <ul class="navbar">
                <b>
                    <li><a href="/" >Home</a></li>
                    <li><a href="/stickynotes">All Notes</a></li>
                    <li><a href="//about" id="current_page">About</a></li>
                </b>
            </ul>
        </div>
    </header>

    <div class="container">
        <div class="box_container">
            <h1>Created by Hillol</h1>
        </div>
        
    </div>

@endsection