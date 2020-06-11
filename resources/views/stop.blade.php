@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Pietura: {{ $stop->nosaukums }}</h4>
                </div>
                <div class="card-body">

                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nosaukums</strong>: {{ $stop->nosaukums }}</li>
                        <li class="list-group-item"><strong>Atrašanās vieta</strong>: {{ $stop->atrasanas_vieta }}</li>
                    </ul>

                </div>
                <div class="card-footer text-center p-md-3">
                    <a href="{{ url('edit/stop', $stop->id) }}" class=" btn btn-primary">Rediģēt pieturu</a>
                    <a href="{{ url('destroy/stop', $stop->id) }}" class="btn btn-secondary">Izdzēst pieturu</a>
                </div>
            </div>
        </div>
    </div>
@endsection
