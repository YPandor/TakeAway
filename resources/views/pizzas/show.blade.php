@extends('layouts.app')

@section('content')

<div class="wrapper pizza-details">
    <h1>Order For {{$pizza_id->name}}</h1>
    <p class="type">Type - {{$pizza_id->type}}</p>
    <p class="base">Base - {{$pizza_id->base}}</p>
    <p class="toppings">Extra Toppings</p>
    <ul>
        @foreach ($pizza_id->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
    </ul>
        <form action="{{ route('pizzas.destroy', $pizza_id->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>
</div>
<a href="/pizzas" class="back"><-Back to All Pizzas</a>

@endsection