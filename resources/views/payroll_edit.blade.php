@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header">Rediģēt algu maksājumu: {{ $payroll->id }}</h4>
                <div class="card-body">

                    <form action="{{ action('PayController@update', ['id' => $payroll->id]) }}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <div class="form-group row">
                            <label for="darbinieks" class="text-md-right col-md-4">{{ __('messages.Employee') }}</label>
                            <input class="col-md-6" name="darbinieks" type="text" id="darbinieks" value="{{ $payroll->vards }} {{ $payroll->uzvards }}" disabled>
                        </div>

                        <div class="form-group row">
                            <label for="amats" class="text-md-right col-md-4">{{ __('messages.Position') }}</label>
                            <input class="col-md-6" name="amats" type="text" id="amats" value="{{ $payroll->nosaukums }}" disabled>
                        </div>

                        <div class="form-group row">
                            <label for="likme" class="text-md-right col-md-4">{{ __('messages.Hourly_rate') }}</label>
                            <input class="col-md-6" name="likme" type="text" id="likme"
                               value="@if ( App::getLocale() == 'lv')&euro;{{ number_format ($payroll->likme, 2, ',', ' ') }}
                                @elseif ( App::getLocale() == 'en')&euro;{{ number_format ($payroll->likme, 2, '.', ',') }}
                               @endif" disabled>
                        </div>

                        <div class="form-group row">
                            <label for="izsniegsanas_datums" class="text-md-right col-md-4">{{ __('messages.Issue_date') }}</label>
                            <input class="col-md-6" name="izsniegsanas_datums" type="text" id="izsniegsanas_datums"
                               value="@if ( App::getLocale() == 'lv') {{ date('d.m.Y', strtotime($payroll->izsniegsanas_datums)) }}
                                @elseif ( App::getLocale() == 'en') {{ date('m/d/Y', strtotime($payroll->izsniegsanas_datums)) }}
                                @endif" disabled>
                        </div>

                        <div class="form-group row {{ $errors->has('stundu_sk') ? 'has-error' : ''}}">
                            <label for="stundu_sk" class="control-label text-md-right col-md-4">{{ __('messages.Hours_worked') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('stundu_sk') ? ' is-invalid' : '' }}"
                                   name="stundu_sk" type="text" id="stundu_sk"
                                   value="{{ $payroll->stundu_sk }}">
                            @if ($errors->has('stundu_sk'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('stundu_sk') }}</strong></span>
                            @endif
                        </div>

                        <input type="submit" value="{{ __('Confirm_changes') }}" class="btn btn-primary btn-block col-md-4 mx-md-auto">

                    </form>
                </div>
            </div></div></div>

@endsection
