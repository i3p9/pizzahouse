@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
        {{-- @for($i = 0; $i < 5; $i++)
        <p>the value of i is {{ $i }}</p>
        @endfor --}}
        {{-- @for ($i = 0; $i < count($pizzas); $i++ )
        <p>{{ $pizzas[$i]['type'] }} - {{ $pizzas[$i]['base'] }}</p>
        @endfor --}}
            <p>
                {{ $name }} {{-- printing query variable taken from web.php --}}
            </p>
            <p> {{ $age }} </p>
        @foreach ($pizzas as $pizza)
        <div>
            {{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }}
            @if ($loop->index == 1)
            <span> - first in the loop</span>                         
            @endif
        </div>   
        @endforeach
    </div>
</div>
@endsection
