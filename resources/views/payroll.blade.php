@extends('layouts.app')
@section('content')

    <h4>Saraksts ar visiem veiktajiem maksājumiem</h4>
    <h6><a href="{{ action('PayController@create') }}">Jauns maksājums</a></h6>
    @if(count($payroll) == 0)

        <h5>Veikto maksājumu nav!</h5>

    @else
        @foreach ( $payroll as $pay)
            <div>
                <a href="{{ url('payroll/view', $pay->id) }}">{{ $pay->pers_kods }} {{ $pay->likme * $pay->stundu_sk }} {{ $pay->izsniegsanas_datums }}</a>
            </div>
        @endforeach
    @endif

@endsection
