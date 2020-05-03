@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
        @foreach ($pizzas as $i)
        <div>
            {{ $i->name }} - {{ $i->type }} - {{ $i->base }}
            {{ $i->index }}
        </div>
        @endforeach
    </div>
</div>
@endsection
