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
            <h1>
                {{$country->name}}
            </h1>
            <ul class="list-group">
                @foreach($cities as $city)
                    <li class="list-group-item">{{$city->name}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@stop