@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
    <h1>
        Order for: {{ $pizzaid->name }}
    </h1>
    <p> Pizza type: {{ $pizzaid->type }} </p>
    <p> Pizza base: {{ $pizzaid->base }} </p>
    <p class="toppings">Extra toppings:</p>
    <ul>
        @foreach ($pizzaid->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
    </ul>
    <form action="/pizzas/{{ $pizzaid->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>
</div>
<a href="/pizzas" class="back"><- Back to all pizzas</a>
@endsection
