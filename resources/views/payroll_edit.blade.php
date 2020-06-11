@extends('layouts.app')
@section('content')
    <form action="{{action('PayController@update', ['id' => $payroll->id])}}" method="post">
        <div class="col-4">
            <table>
                <tr>
                    <td>Persona</td>
                    <td>{{ $payroll->pers_kods }}</td>
                </tr>
                <tr>
                    <td>Amats</td>
                    <td>{{ $payroll->amats }}</td>
                </tr>
                <tr>
                    <td>Likme</td>
                    <td>{{ $payroll->likme }}</td>
                </tr>
                <tr>
                    <td>Izsniegšanas datums</td>
                    <td>{{ $payroll->izsniegsanas_datums }}</td>
                </tr>
                <tr>
                    <td>Vecais stundu skaits</td>
                    <td>{{ $payroll->stundu_sk }}</td>
                </tr>
                <tr>
                    <td>Jaunais stundu skaits </td>
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
            <input type="submit" value="Apstiprināt" class="btn">
        </div>
    </form>
@endsection

