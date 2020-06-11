@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline-block">{{ __('messages.All_routes_list') }}</h4>
                    <a href="{{ url('create/route') }}" class="btn btn-primary float-right">{{ __('messages.Add_route') }}</a>
                </div>

                    @if(count($routes) == 0)

                        <h3 class="text-center alert alert-warning">{{ __('alerts.No_routes') }}</h3>

                    @else

                        <div class="list-group list-group-flush">
                            @foreach ($routes as $route)
                                <a class="list-group-item list-group-item-action" href="{{ url('route', $route->id) }}">
                                    <h5 class="d-inline-block mr-1"><span class="badge badge-pill badge-light">{{ $route->id }}</span></h5>
                                    {{ $route->apraksts }}
                                </a>
                            @endforeach
                        </div>

                    @endif
            </div>
        </div>
    </div>

@endsection




