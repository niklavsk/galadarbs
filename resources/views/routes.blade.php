@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline-block">Saraksts ar visiem maršrutiem</h4>
                    <a href="{{ url('create/route') }}" class="btn btn-primary float-right">Pievienot maršrutu</a>
                </div>

                <div class="card-body">
                    @if(count($routes) == 0)

                        <h3 class="text-center alert alert-warning">Maršrutu nav!</h3>

                    @else

                        <div class="list-group list-group-flush">
                            @foreach ($routes as $route)
                                <a class="list-group-item list-group-item-action" href="{{ url('route', $route->id) }}">
                                    <span class="badge badge-pill badge-secondary mr-1">{{ $route->id }}</span>
                                     {{ $route->apraksts }}
                                </a>
                            @endforeach
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection




