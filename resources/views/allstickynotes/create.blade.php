@extends('allstickynotes.layout')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/create.css') }}" />
    <h1 >Write your notes</h1>

    <x-alert/>

    <form method="post" action="/stickynotes/create" >
        @csrf
        <input type="text" name="title" >
        <input type="submit" value="Create" class="create_button">
    </form>
@endsection