@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header">Transportlīdzeklis: {{ $vehicle->id }}</h4>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Ražotājs</strong>: {{ $vehicle->razotajs }}</li>
                        <li class="list-group-item"><strong>Ražošanas datums</strong>: {{ $vehicle->razosanas_datums }}</li>
                        <li class="list-group-item"><strong>Pēdējā remonta datums</strong>: {{ $vehicle->pedeja_remonta_datums }}</li>
                        <li class="list-group-item"><strong>Tehniskās pārbaudes termiņš</strong>: {{ $vehicle->tehniskas_parbaudes_termins }}</li>

                        <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ url('depot', $vehicle->depo_nr) }}">
                            <strong>Depo</strong>: {{ $vehicle->depo_nr }}</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ url('route', $vehicle->marsruta_id) }}">
                            <strong>Maršruts</strong>: {{ $vehicle->marsruta_id }}</a>
                    </ul>
                </div>

                <div class="card-footer text-md-center">
                    <a href="{{ url('edit/vehicle', $vehicle->id) }}" class="btn btn-primary">Rediģēt transportlīdzekli</a>
                    <a href="{{ url('destroy/vehicle', $vehicle->id) }}" class="btn btn-secondary">Izdzēst transportlīdzekli</a>
                </div>
            </div>
        </div>
    </div>

@endsection

