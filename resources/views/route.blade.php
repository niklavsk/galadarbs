@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header">Maršruts: {{ $route->id }} | <strong>{{ $route->nosaukums }}</strong></h4>

                <div class="card-body">
                    <h4 class="text-md-center">Apraksts: {{ $route->apraksts }}</h4>
                    <hr/>
                    @if(count($stops) == 0)
                        <h5 class="text-md-center alert alert-warning">Pieturu nav!</h5>
                    @else
                        <table class="table table-borderless table-hover table-striped col-md">

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
                </div>

                <div class="card-footer text-md-center">
                    <a class="btn btn-primary" href="{{ url('edit/route', $route->id) }}">Rediģēt maršrutu</a>
                    <a class="btn btn-secondary" href="{{ url('destroy/route', $route->id) }}">Izdzēst maršrutu</a>
                </div>
            </div>
        </div>
    </div>

@endsection

