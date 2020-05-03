@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
    <h1>
        Order for: {{ $pizzaid->name }}
    </h1>
    <p> Pizza type: {{ $pizzaid->type }} </p>
    <p> Pizza base: {{ $pizzaid->base }} </p>
</div>
<a href="/pizzas" class="back"><- Back to all pizzas</a>
@endsection
