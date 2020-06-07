@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4 class="d-inline-block">Saraksts ar visiem transportlīdzekļiem</h4>

                    <a href="{{ url('create/vehicle') }}" class="btn btn-primary float-right">Pievienot transportlīdzekli</a></div>

                @if(count($vehicles) == 0)

                    <h5 class="text-md-center alert alert-warning">Transportlīdzekļu nav!</h5>

                @else
                    <div class="list-group list-group-flush">
                        @foreach ( $vehicles as $vehicle)
                            <a class="list-group-item list-group-item-action" href="{{ url('vehicle', $vehicle->id) }}">
                                <h5 class="d-inline-block mr-1"><span class="badge badge-pill badge-light">{{ $vehicle->id }}</span></h5>
                                <strong>{{ $vehicle->razotajs }}</strong> Depo: {{ $vehicle->depo_nr }} Maršruts: {{ $vehicle->marsruta_id }}</a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection


