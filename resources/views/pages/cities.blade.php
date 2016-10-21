@extends('layout')

@section('content')

    <div>
        @if (Route::has('login'))
            <div class="top-right links">
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Cities
            </div>
            @foreach($popularCities as $city)
                <li>{{$city->name}}, {{$city->country()->first()->name}}</li>
            @endforeach
        </div>
    </div>
@stop