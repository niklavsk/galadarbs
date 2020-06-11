@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4 class="d-inline-block">{{ __('messages.All_vehicles_list') }}</h4>

                    <a href="{{ url('create/vehicle') }}" class="btn btn-primary float-right">{{ __('messages.Add_vehicle') }}</a></div>

                @if(count($vehicles) == 0)

                    <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_vehicles') }}</h5>

                @else
                    <div class="list-group list-group-flush">
                        @foreach ( $vehicles as $vehicle)
                            <a class="list-group-item list-group-item-action" href="{{ url('vehicle', $vehicle->id) }}">
                                <h5 class="d-inline-block mr-1"><span class="badge badge-pill badge-light">{{ $vehicle->id }}</span></h5>
                                <strong>{{ $vehicle->razotajs }}</strong> {{ __('messages.Depot') }}: {{ $vehicle->depo_nr }}
                                {{ __('messages.Route') }}: {{ $vehicle->marsruta_id }}</a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection


