@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header">{{ __('messages.Vehicle') }}: {{ $vehicle->id }}</h4>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>{{ __('messages.Manufacturer') }}</strong>: {{ $vehicle->razotajs }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.Production_date') }}</strong>: {{ $vehicle->razosanas_datums }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.Last_repair_date') }}</strong>: {{ $vehicle->pedeja_remonta_datums }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.Technical_inspection_valid_till') }}</strong>: {{ $vehicle->tehniskas_parbaudes_termins }}</li>

                        <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ url('depot', $vehicle->depo_nr) }}">
                            <strong>{{ __('messages.Depot') }}</strong>: {{ $vehicle->depo_nr }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ url('route', $vehicle->marsruta_id) }}">
                            <strong>{{ __('messages.Route') }}</strong>: {{ $vehicle->marsruta_id }}</a>
                    </ul>
                </div>

                <div class="card-footer text-md-center">
                    <a href="{{ url('edit/vehicle', $vehicle->id) }}" class="btn btn-primary">{{ __('messages.Edit_vehicle') }}</a>
                    <a href="{{ url('destroy/vehicle', $vehicle->id) }}" class="btn btn-secondary">{{ __('messages.Delete_vehicle') }}</a>
                </div>
            </div>
        </div>
    </div>

@endsection

