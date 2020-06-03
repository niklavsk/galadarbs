@extends('layouts.app')
@section('content')

    <h4>Saraksts ar visiem depo</h4>

    @if(count($depots) == 0)

        <h5>Depo nav!</h5>

    @else
        @foreach ($depots as $depot)
            <div>
                <a href="{{ url('depot', $depot->id) }}">{{ $depot->id }}</a>
            </div>
        @endforeach
    @endif

    <a href="{{ url('create/depot') }}" class="btn">Pievienot depo</a>

@endsection




