@extends('layouts.app')
@section('content')

    <h4>Saraksts ar visiem transportlīdzekļiem</h4>

    @if(count($vehicles) == 0)

        <h5>Transportlīdzekļu nav!</h5>

    @else
        @foreach ( $vehicles as $vehicle)
            <div>
                <a href="{{ url('vehicle', $vehicle->id) }}">{{ $vehicle->id }} {{ $vehicle->razotajs }} {{ $vehicle->depo_nr }} {{ $vehicle->marsruta_id }}</a>
            </div>
        @endforeach
    @endif

@endsection


