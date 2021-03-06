@extends('layout')

@section('content')

    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Vihaara - Travel planner
            </div>
            <div class="mothership-link">
                <a name="mothership" href="/mothership">Mothership</a>
            </div>
        </div>
    </div>
@stop