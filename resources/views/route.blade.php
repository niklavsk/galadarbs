@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header">Maršruts: {{ $route->id }} | <strong>{{ $route->nosaukums }}</strong></h4>

                <div class="card-body">
                    <h4 class="text-md-left">Apraksts: {{ $route->apraksts }}</h4>
                    <hr/>
                    @if(count($stops) == 0)
                        <h5 class="text-md-center alert alert-warning">Pieturu nav!</h5>
                    @else
                        <table class="table table-borderless table-hover table-striped col-md">

                            <tr>
                                <th>Pietura</th>
                                <th>Pienākšanas laiki</th>
                                <th></th>
                            </tr>

                            @foreach ($stops as $stop)
                                <tr>
                                    <td>{{ $stop->pietura }}</td>
                                    <td>
                                        @foreach($times as $time)
                                            @if($time->marsruta_pietura == $stop->id) {{ date('H:i', strtotime($time->laiks)) }} |@endif
                                        @endforeach
                                    </td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>

                <div class="card-footer row">
                    <div class="text-md-left col-md-8">

                        <div class="col-sm-6 float-left">
                            <a class="btn btn-primary" href="{{ url('create/timetable', $route->id) }}">Pievienot pienākšanas laikus</a>
                        </div>

                        <div class="col-sm-6 float-right">
                            <form action="{{action('RouteController@destroyTimetable', ['id' => $route->id])}}" method="post">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                                <div class="form-group">

                                    <select name="toDelete" size="1" class="col-md-4" id="toDelete">
                                        <option value=""></option>
                                        @foreach($delete as $d)
                                            <option value="{{ $d->time_id }}">{{ date('H:i', strtotime($d->laiks)) }}</option>
                                        @endforeach
                                    </select>

                                    <input type="submit" value="Izdzēst no" class="btn btn-secondary">
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="text-md-right col">
                        <a class="btn btn-primary" href="{{ url('edit/route', $route->id) }}">Rediģēt maršrutu</a>
                        <a class="btn btn-secondary" href="{{ url('destroy/route', $route->id) }}">Izdzēst maršrutu</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

