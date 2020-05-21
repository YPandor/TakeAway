@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" name="name" id="name">
        <label for="type">Choose Pizza Type</label>
        <select name="type" id="type">
            <option value="Marghertia">Marghertia</option>
            <option value="Hawaiian">Hawaiian</option>
            <option value="Veg">Veg</option>
            <option value="Volcano">Volcano</option>
        </select>
        <label for="base">Choose BAse Type</label>
        <select name="base" id="base">
            <option value="cheesy crust">cheesy crust</option>
            <option value="garlic crust">garlic crust</option>
            <option value="thin and crispy">thin and crispy</option>
            <option value="thick">thick</option>
        </select>
        <fieldset>
            <label>Extra Toppings</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
            <input type="checkbox" name="toppings[]" value="pineapple">Pineapple<br/>
            <input type="checkbox" name="toppings[]" value="sweetcorn">Sweetcorn<br/>
            <input type="checkbox" name="toppings[]" value="pepperoni">Pepperoni<br/>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
            <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>



</div>
@endsection