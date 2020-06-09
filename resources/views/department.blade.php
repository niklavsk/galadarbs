@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Nodaļa: {{ $department->id }}</h4>
                </div>
                <div class="card-body">

                    <ul class="list-group">
                        @if($department->nodalas_vaditajs != "")
                            <a class="list-group-item list-group-item-primary list-group-item-action text-uppercase"
                               href="{{ url('employee', $department->nodalas_vaditajs) }}">
                                <strong>Nodaļas vadītājs</strong>: {{ $department->nodalas_vaditajs }}</a>
                        @else <li class="list-group-item list-group-item-primary"><strong>Nodaļas vadītājs</strong>:</li>
                        @endif
                        <li class="list-group-item"><strong>Apraksts</strong>: {{ $department->apraksts }}</li>
                        <li class="list-group-item"><strong>Atrašanās vieta</strong>: {{ $department->atrasanas_vieta }}</li>
                        <li class="list-group-item"><strong>Epasts</strong>: {{ $department->epasts }}</li>
                        <li class="list-group-item"><strong>Kontakttālrunis</strong>: {{ $department->kontakttalrunis }}</li>
                    </ul>

                </div>
                <div class="card-footer text-center p-md-3">
                    <a href="{{ url('edit/department', $department->id) }}" class=" btn btn-primary">Rediģēt nodaļu</a>
                    <a href="{{ url('destroy/department', $department->id) }}" class="btn btn-secondary">Izdzēst nodaļu</a>
                </div>
            </div>
        </div>
    </div>
@endsection
