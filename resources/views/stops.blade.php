@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline-block">{{ __('messages.All_stations_list') }}</h4>
                    <a href="{{ url('create/stop') }}" class="btn btn-primary float-right">{{ __('messages.Add_station') }}</a>
                </div>

                <div class="card-body">

                    @if(count($stops) == 0)

                        <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_stations') }}</h5>

                    @else
                        <div class="btn-group-vertical mx-md-auto d-md-block col-md-8 h4">
                            @foreach ($stops as $stop)
                                <a class="btn btn-light"
                                   href="{{ url('stop', $stop->id) }}"><span class="h5">{{ $stop->nosaukums }}</span></a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
