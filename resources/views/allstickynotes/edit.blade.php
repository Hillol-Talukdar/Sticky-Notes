@extends('allstickynotes.layout')

@section('headerContent')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/edit.css') }}" />
    <header class="header">
            <div class="left">
                <ul class="navbar">
                    <b>
                        <li><a href="/" >Home</a></li>
                        <li><a href="/stickynotes" >All Notes</a></li>
                        <li><a href="/about">About</a></li>
                    </b>
                </ul>
            </div>
    </header>

@endsection

@section('content')
    <div class="box_container">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/edit.css') }}" />
        
        <h1 class="title_header">Update this Note</h1>

        <x-alert/>
        <div id="input_form">
            <form method="post" action="{{'/stickynotes/'.$stickyNote->id.'/update'}}" >
                @csrf
                @method('patch')

                <input type="text" value="{{$stickyNote->title}}" name="title" class="input_title">
                <input type="submit" value="Edit" class="edit_button">
            </form>
        </div>


        <div class="back_button_container">
            <a href="/stickynotes" class="back_button"> Back</a>
        </div>  

    </div>

@endsection