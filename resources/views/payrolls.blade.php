@extends('layouts.app')
@section('content')

    <h4>{{ __('messages.All_processed_payments_list') }}</h4>

    @if($role == 4 || $role == 1)
        <h6><a href="{{ url('create/payroll') }}">{{ __('messages.Add_payment') }}</a></h6>
    @endif

    @if(count($payrolls) == 0)
        <h5>{{ __('alerts.No_processed_payments') }}</h5>
    @else
        @foreach ( $payrolls as $payroll)
            <div>
                <a href="{{ url('payroll', $payroll->pay_id) }}">{{ $payroll->vards }} {{ $payroll->uzvards }} {{ $payroll->likme * $payroll->stundu_sk }}&euro; {{ $payroll->izsniegsanas_datums }}</a>
            </div>
        @endforeach
    @endif

@endsection
