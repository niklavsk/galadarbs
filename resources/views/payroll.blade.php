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
            <td>{{$employee->pk}}</td>
            <td>{{$employee->adrese}}</td>
            <td>{{$employee->talrunis}}</td>
            <td>{{$employee->epasts}}</td>
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

@endsection

