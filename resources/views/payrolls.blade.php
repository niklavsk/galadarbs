@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4 class="d-inline-block">{{ __('messages.All_processed_payments_list') }}</h4>

                @if(Auth::user()->role == 4 || Auth::user()->role == 1)
                    <a href="{{ url('create/payroll') }}" class="btn btn-primary float-right">{{ __('messages.Add_payment') }}</a></div>
                @endif

                @if(count($payrolls) == 0)

                    <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_processed_payments') }}</h5>

                @else
                    <div class="list-group list-group-flush">
                        @foreach ( $payrolls as $payroll)
                            <a class="list-group-item list-group-item-action" href="{{ url('payroll', $payroll->pay_id) }}">
                                <h5 class="d-inline-block mr-1"><span class="badge badge-pill badge-light">{{ $payroll->pay_id }}</span></h5>
                                <strong>{{ $payroll->vards }} {{ $payroll->uzvards }} &nbsp; {{ $payroll->pk }}</strong>
                                &nbsp; &nbsp;

                                @if ( App::getLocale() == 'lv')
                                Summa: &euro;{{ number_format (($payroll->likme * $payroll->stundu_sk), 2, ',', ' ') }}
                                @elseif ( App::getLocale() == 'en')
                                Summa: &euro;{{ number_format (($payroll->likme * $payroll->stundu_sk), 2, '.', ',') }}
                                @endif
                                &nbsp;

                                @if ( App::getLocale() == 'lv')
                                    {{ date('d.m.Y', strtotime($payroll->izsniegsanas_datums)) }}
                                @elseif ( App::getLocale() == 'en')
                                    {{ date('m/d/Y', strtotime($payroll->izsniegsanas_datums)) }}
                                @endif
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
