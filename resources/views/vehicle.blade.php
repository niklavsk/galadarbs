@extends('layouts.app')
@section('content')

    <h4>Transportlīdzeklis: {{ $vehicle->id }}</h4>

    <div>
        <h4>Ražotājs: {{ $vehicle->razotajs }}</h4>
        <h4>Ražošanas datums: {{ $vehicle->razosanas_datums }}</h4>
        <h4>Pēdējā remonta datums: {{ $vehicle->pedeja_remonta_datums }}</h4>
        <h4>Tehniskās pārbaudes termiņš: {{ $vehicle->tehniskas_parbaudes_termins }}</h4>

        <a href="{{ url('depot', $vehicle->depo_nr) }}"><h4>Depo: {{ $vehicle->depo_nr }}</h4></a>
        <a href="{{ url('route', $vehicle->marsruta_id) }}"><h4>Maršruts: {{ $vehicle->marsruta_id }}</h4></a>
    </div>

@endsection

