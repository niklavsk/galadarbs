@extends('layouts.app')
@section('content')

    <h4>Saraksts ar visiem maršrutiem</h4>

    @if(count($routes) == 0)

        <h5>Maršrutu nav!</h5>

    @else
        @foreach ($routes as $route)
            <div>
                <a href="{{ url('route', $route->id) }}">{{ $route->id }} | {{ $route->apraksts }}</a>
            </div>
        @endforeach
    @endif

@endsection




