@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
            <img src="img/pizza-logo.jpg" alt="pizza house logo" width="500" height="300"/>
            <div class="title m-b-md">
            The Best Pizzas Around
        </div>
    <p class="msg">{{ session('msg') }}</p>
    <a href="{{ route('pizzas.create') }}">Order Your Pizza</a>
    </div>
</div>
@endsection