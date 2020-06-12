@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header">{{ __('messages.Route') }}: {{ $route->id }} | <strong>{{ $route->nosaukums }}</strong></h4>

                <div class="card-body">
                    <h4 class="text-md-left">{{ __('messages.Description') }}: {{ $route->apraksts }}</h4>
                    <hr/>
                    @if(count($stops) == 0)
                        <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_stations') }}</h5>
                    @else
                        <table class="table table-borderless table-hover table-striped col-md">

                            <tr>
                                <th>{{ trans_choice('messages.Station', 0) }}</th>
                                <th>{{ __('messages.Arrival_times') }}</th>
                                <th></th>
                            </tr>

                            @foreach ($stops as $stop)
                                <tr>
                                    <td>
                                        @foreach($pieturas as $pietura)
                                            @if($pietura->id == $stop->pietura){{ $pietura->nosaukums }}@endif
                                        @endforeach
                                    </td>
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
                            <a class="btn btn-primary" href="{{ url('create/timetable', $route->id) }}">{{ __('messages.Add_arrival_times') }}</a>
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

                                    <input type="submit" value="{{ __('messages.Delete_from') }}" class="btn btn-secondary">
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="text-md-right col">
                        <a class="btn btn-primary" href="{{ url('edit/route', $route->id) }}">{{ __('messages.Edit_route') }}</a>
                        <a class="btn btn-secondary" href="{{ url('destroy/route', $route->id) }}">{{ __('messages.Delete_route') }}</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

