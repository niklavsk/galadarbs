@extends('layouts.app')
@section('content')

    <h4>Maksājums</h4>

    <table>
        <tr>
            <th>Personas kods</th>
            <th>Adrese</th>
            <th>Tālrunis</th>
            <th>Epasts</th>
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
            <th>Amats</th>
            <th>Likme</th>
            <th>Stundu skaits</th>
            <th>Izsniegšanas datums</th>
        </tr>
        <tr>
            <td>{{$payroll->amats}}</td>
            <td>{{$payroll->likme}}</td>
            <td>{{$payroll->stundu_sk}}</td>
            <td>{{$payroll->izsniegsanas_datums}}</td>
        </tr>
    </table>

    <a href="{{ url('edit/payroll', $payroll->id) }}" class="btn">Rediģēt maksājumu</a>
    <a href="{{ url('destroy/payroll', $payroll->id) }}" class="btn">Izdzēst maksājumu</a>
@endsection

