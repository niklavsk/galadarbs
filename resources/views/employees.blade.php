@extends('layouts.app')
@section('content')

    <h4>Saraksts ar visiem darbiniekiem</h4>

    @if(count($employees) == 0)

        <h5>Darbinieku nav!</h5>

    @else
        @foreach ( $employees as $employee)
            <div>
                <a href="{{ url('employee', $employee->id) }}">{{ $employee->vards }} {{ $employee->uzvards }}</a>
            </div>
        @endforeach
    @endif

@endsection
