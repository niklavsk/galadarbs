@extends('layouts.app')
@section('content')

    <h4>Maršruts: {{ $route->id }} | {{ $route->nosaukums }}</h4>

    <div>
{{--        <a href="{{ url('employee', $depot->depo_vaditajs) }}"><h4>Depo vadītājs: {{ $depot->depo_vaditajs }}</h4></a>--}}

        <h4>Apraksts: {{ $route->apraksts }}</h4>
    </div>


    @if(count($stops) == 0)

        <h5>Pieturu nav!</h5>

    @else
        <table>

            <tr>
                <th>Pietura</th>
                <th></th>
                <th></th>
            </tr>

            @foreach ($stops as $stop)
                <tr>
                    <td>{{ $stop->pietura }}</td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    @endif



@endsection

