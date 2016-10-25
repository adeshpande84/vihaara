@extends('layout')

@section('content')

    <div>
        @if (Route::has('login'))
            <div class="top-right links">
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            </div>
        @endif

        <div class="container">
            <h1>
                Country Search
            </h1>
            <div class="form-group">
            
            </div>
            
        </div>
    </div>

@stop

