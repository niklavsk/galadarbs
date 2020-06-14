@extends('layouts.app')
@section('content')

    <script type="text/javascript">
        $(document).ready(function () {
            $("#search").keyup(function () {
            let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: 'POST',
                url: "{{ route('route.search') }}",
                data: {
                    _token: CSRF_TOKEN,
                    search: $("#search").val()
                },
                success: function (data) {
                    $("#route-list").html('');
                    console.log(data);
                    $.each(data, function (i, route) {
                        let c = '<a class="list-group-item list-group-item-action" href="/route/' +
                            route.id + '"><h5 class="d-inline-block mr-1"><span class="badge badge-pill badge-light">' + route.id + ' </span></h5> '+ route.apraksts +'</a>';
                        $("#route-list").append(c);
                    })
                }
            })
        })
        })
    </script>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline-block">{{ __('messages.All_routes_list') }}</h4>
                    
                    <div class="float-right">
                        <div class="my-auto d-inline-block mr-3">
                            <input class="form-control" type="text" id="search"
                                   placeholder="{{ __('messages.Search') }}">
                        </div>
                        @if(Auth::user()->role == 1)
                            <a href="{{ url('create/route') }}" class="btn btn-primary float-right">{{ __('messages.Add_route') }}</a>
                        @endif
                    </div>

                </div>

                    @if(count($routes) == 0)

                        <h3 class="text-center alert alert-warning">{{ __('alerts.No_routes') }}</h3>

                    @else

                        <div class="list-group list-group-flush" id="route-list">
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




