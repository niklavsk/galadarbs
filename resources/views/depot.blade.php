@extends('layouts.app')
@section('content')

    <h4>Depo: {{ $depot->id }}</h4>

    <div>
        @if($depot->depo_vaditajs != "")
        <a href="{{ url('employee', $depot->depo_vaditajs) }}"><h4>Depo vadītājs: {{ $depot->depo_vaditajs }}</h4></a>
        @else <h4>Depo vadītājs:</h4>
        @endif

        <h4>Apraksts: {{ $depot->apraksts }}</h4>
        <h4>Atrašanās vieta: {{ $depot->atrasanas_vieta }}</h4>
        <h4>Epasts: {{ $depot->epasts }}</h4>
        <h4>Kontakttālrunis: {{ $depot->kontakttalrunis }}</h4>
    </div>

    <a href="{{ url('edit/depot', $depot->id) }}" class="btn">Rediģēt depo</a>
    <a href="{{ url('destroy/depot', $depot->id) }}" class="btn">Izdzēst depo</a>

@endsection
