@extends('layouts.app')
@section('content')

    <h4>Saraksts ar visiem veiktajiem maksājumiem</h4>
    @if($role == 4 || $role == 1)
        <h6><a href="{{ url('create/payroll') }}">Jauns maksājums</a></h6>
    @endif
    @if(count($payrolls) == 0)

        <h5>Veikto maksājumu nav!</h5>

    @else
        @foreach ( $payrolls as $payroll)
            <div>
                <a href="{{ url('payroll', $payroll->id) }}">{{ $payroll->pers_kods }} {{ $payroll->likme * $payroll->stundu_sk }} {{ $payroll->izsniegsanas_datums }}</a>
            </div>
        @endforeach
    @endif

@endsection
