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
                Countries
            </h1>
            <ul class="list-group">
                @foreach($countries as $country)
                    <li class="list-group-item">
                        <a href="/countries/{{$country->id}}">{{$country->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@stop