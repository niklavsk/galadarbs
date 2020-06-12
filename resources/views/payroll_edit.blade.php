@extends('layouts.app')
@section('content')
    <form action="{{action('PayController@update', ['id' => $payroll->id])}}" method="post">
        <div class="col-4">
            <table>
                <tr>
                    <td>{{ __('messages.pers_ID') }}</td>
                    <td>{{ $payroll->pers_kods }}</td>
                </tr>
                <tr>
                    <td>{{ __('messages.Position') }}</td>
                    <td>{{ $payroll->amats }}</td>
                </tr>
                <tr>
                    <td>{{ __('messages.Hourly_rate') }}</td>
                    <td>{{ $payroll->likme }}</td>
                </tr>
                <tr>
                    <td>{{ __('messages.Issue_date') }}</td>
                    <td>{{ $payroll->izsniegsanas_datums }}</td>
                </tr>
                <tr>
                    <td>{{ __('messages.Old_hours_worked') }}</td>
                    <td>{{ $payroll->stundu_sk }}</td>
                </tr>
                <tr>
                    <td>{{ __('messages.New_hours_worked') }}</td>
                    <td>
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input type="hidden" id="pers_kods" name="pers_kods" value="{{ $payroll->pers_kods }}">
                        <input type="hidden" id="amats" name="amats" value="{{ $payroll->amats }}">
                        <input type="hidden" id="likme" name="likme" value="{{ $payroll->likme}}">
                        <input type="text" id="stundu_sk" name="stundu_sk">
                        @if ($errors->has('stundu_sk'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('stundu_sk') }}</strong></span>
                        @endif
                        <input type="hidden" id="izsniegsanas_datums" name="izsniegsanas_datums" value="{{ date("Y-m-d") }}">
                    </td>
                </tr>
            </table>
            <input type="submit" value="{{ __('messages.Confirm_changes') }}" class="btn">
        </div>
    </form>
@endsection

