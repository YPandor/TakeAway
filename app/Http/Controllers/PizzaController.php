<?php

namespace App\Http\Controllers;

use App\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::latest()->get();
        return view('pizzas.index', ['pizzas' => $pizzas]);

    }

    public function show($pizza_id)
    {
        $pizza = Pizza::findOrFail($pizza_id);
        return view('pizzas.show', ['pizza_id' => $pizza]);

    }

    public function create()
    {
        return view('pizzas.create', );
    }

    public function store()
    {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        $pizza->save();

        return redirect('/')->with('msg', 'Thank you for your order');
    }

    public function destroy($pizza_id)
    {
        $pizza = Pizza::findOrFail($pizza_id);
        $pizza->delete();
        return redirect('/pizzas');
    }
}
