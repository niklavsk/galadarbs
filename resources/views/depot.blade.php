@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Depo: {{ $depot->id }}</h4>
                </div>
                <div class="card-body">

                    <ul class="list-group">
                        @if($depot->depo_vaditajs != "")
                            <a class="list-group-item list-group-item-primary list-group-item-action text-uppercase"
                                   href="{{ url('employee', $depot->depo_vaditajs) }}">
                                    <strong>Depo vadītājs</strong>: {{ $depot->depo_vaditajs }}</a>
                        @else <li class="list-group-item list-group-item-primary"><strong>Depo vadītājs</strong>:</li>
                        @endif
                        <li class="list-group-item"><strong>Apraksts</strong>: {{ $depot->apraksts }}</li>
                        <li class="list-group-item"><strong>Atrašanās vieta</strong>: {{ $depot->atrasanas_vieta }}</li>
                        <li class="list-group-item"><strong>Epasts</strong>: {{ $depot->epasts }}</li>
                        <li class="list-group-item"><strong>Kontakttālrunis</strong>: {{ $depot->kontakttalrunis }}</li>
                    </ul>

                </div>
                <div class="card-footer text-center p-md-3">
                    <a href="{{ url('edit/depot', $depot->id) }}" class=" btn btn-primary">Rediģēt depo</a>
                    <a href="{{ url('destroy/depot', $depot->id) }}" class="btn btn-secondary">Izdzēst depo</a>
                </div>
            </div>
        </div>
    </div>
@endsection
