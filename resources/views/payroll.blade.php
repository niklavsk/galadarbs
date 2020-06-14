@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('messages.Payment') }}: {{ $payroll->pay_id }}</h4>
                </div>
                <div class="card-body">

                    <ul class="list-group">
                        @if(Auth::User()->role != 0)
                            <a class="list-group-item list-group-item-primary list-group-item-action"
                               href="{{ url('employee', $payroll->emp_id) }}">
                                <strong>{{ __('messages.First_name') }}</strong>: {{ $payroll->vards }}
                                &nbsp;
                                <strong>{{ __('messages.Last_name') }}</strong>: {{ $payroll->uzvards }}
                                &nbsp;
                                <strong>{{ __('messages.pers_ID') }}</strong>: {{ $payroll->pk }}</a>
                        @endif

                        <li class="list-group-item"><strong>{{ __('messages.Position') }}</strong>: {{ $payroll->nosaukums }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.Hourly_rate') }}</strong>:
                            @if ( App::getLocale() == 'lv')
                            &euro;{{ number_format (($payroll->likme), 2, ',', ' ') }}
                            @elseif ( App::getLocale() == 'en')
                            &euro;{{ number_format (($payroll->likme), 2, '.', ',') }}
                            @endif
                        </li>
                        <li class="list-group-item"><strong>{{ __('messages.Hours_worked') }}</strong>: {{ $payroll->stundu_sk }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.Issue_date') }}</strong>:
                            @if ( App::getLocale() == 'lv')
                                {{ date('d.m.Y', strtotime($payroll->izsniegsanas_datums)) }}
                            @elseif ( App::getLocale() == 'en')
                                {{ date('m/d/Y', strtotime($payroll->izsniegsanas_datums)) }}
                            @endif
                        </li>
                        <li class="list-group-item"><strong>{{ __('messages.Salary') }}</strong>:
                            @if ( App::getLocale() == 'lv')
                            &euro;{{ number_format (($payroll->likme * $payroll->stundu_sk), 2, ',', ' ') }}
                            @elseif ( App::getLocale() == 'en')
                            &euro;{{ number_format (($payroll->likme * $payroll->stundu_sk), 2, '.', ',') }}
                            @endif
                        </li>
                    </ul>

                </div>
                <div class="card-footer text-center p-md-3">
                    @if(Auth::user()->role == 1 || Auth::user()->role == 4)
                        <a href="{{ url('edit/payroll', $payroll->pay_id) }}" class="btn btn-primary">{{ __('messages.Edit_payment') }}</a>
                        <a href="{{ url('destroy/payroll', $payroll->pay_id) }}" class="btn btn-secondary">{{ __('messages.Delete_payment') }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

