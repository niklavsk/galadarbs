@extends('layouts.app')
@section('content')

    <h4>{{ __('messages.Payment') }}</h4>

    <table>
        <tr>
            <th>{{ __('messages.pers_ID') }}</th>
            <th>{{ __('messages.Address') }}</th>
            <th>{{ __('messages.Telephone_number') }}</th>
            <th>{{ __('messages.Email') }}</th>
        </tr>
        <tr>
            <td>{{$payroll->pk}}</td>
            <td>{{$payroll->adrese}}</td>
            <td>{{$payroll->talrunis}}</td>
            <td>{{$payroll->epasts}}</td>
        </tr>
    </table>

    <table>
        <tr>
            <th>{{ __('messages.Position') }}</th>
            <th>{{ __('messages.Hourly_rate') }}</th>
            <th>{{ __('messages.Hours_worked') }}</th>
            <th>{{ __('messages.Issue_date') }}</th>
        </tr>
        <tr>
            <td>{{$payroll->amats}}</td>
            <td>{{$payroll->likme}}</td>
            <td>{{$payroll->stundu_sk}}</td>
            <td>{{$payroll->izsniegsanas_datums}}</td>
        </tr>
    </table>

    <a href="{{ url('edit/payroll', $payroll->id) }}" class="btn">{{ __('messages.Edit_payment') }}</a>
    <a href="{{ url('destroy/payroll', $payroll->id) }}" class="btn">{{ __('messages.Delete_payment') }}</a>
@endsection

