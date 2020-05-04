@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>    
    @foreach ($pizzas as $i)
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="pizza icon">
            <h4><a href="/pizzas/{{ $i->id }}">{{ $i->name }}</a></h4>
        </div>
        @endforeach
        <p class="mssg">{{ session('mssg')}}</p>
        <a href="/">Go back home</a>
    </div>
@endsection
