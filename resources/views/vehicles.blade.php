@extends('layouts.app')
@section('content')

    <script type="text/javascript">
        $(document).ready(function () {
            $("#search").keyup(function () {
                let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'POST',
                    url: "{{ route('vehicle.search') }}",
                    data: {
                        _token: CSRF_TOKEN,
                        search: $("#search").val()
                    },
                    success: function (data) {
                        console.log(data);
                        $("#vehicle-list").html('');
                        $.each(data, function (i, vehicle) {
                            let c = '<a class="list-group-item list-group-item-action" href="/vehicle/' +
                                vehicle.id + '"><h5 class="d-inline-block mr-1"><span class="badge badge-pill badge-light">'
                                + vehicle.id + '</span></h5> <strong>' + vehicle.razotajs + '</strong> {{ __('messages.Depot') }}: ' +
                                vehicle.depo_nr + ' {{ __('messages.Route') }}: ';
                                if (vehicle.marsruta_id != null) {
                                    c += (vehicle.marsruta_id + ' | ' + vehicle.apraksts);
                                }
                                c += '</a>';
                            $("#vehicle-list").append(c);
                        })
                    }
                })
            })
        })
    </script>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4 class="d-inline-block">{{ __('messages.All_vehicles_list') }}</h4>
                    <div class="float-right">
                        <div class="my-auto d-inline-block mr-3">
                            <input class="form-control" type="text" id="search"
                                   placeholder="{{ __('messages.Search') }}">
                        </div>
                        <a href="{{ url('create/vehicle') }}"
                           class="btn btn-primary float-right">{{ __('messages.Add_vehicle') }}</a>
                    </div>
                </div>

                @if(count($vehicles) == 0)

                    <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_vehicles') }}</h5>

                @else
                    <div class="list-group list-group-flush" id="vehicle-list">
                        @foreach ( $vehicles as $vehicle)
                            <a class="list-group-item list-group-item-action" href="{{ url('vehicle', $vehicle->id) }}">
                                <h5 class="d-inline-block mr-1"><span class="badge badge-pill badge-light">{{ $vehicle->id }}</span></h5>
                                <strong>{{ $vehicle->razotajs }}</strong> {{ __('messages.Depot') }}: {{ $vehicle->depo_nr }}
                                {{ __('messages.Route') }}:
                                @foreach($marsruti as $marsruts)
                                    @if($marsruts->id == $vehicle->marsruta_id){{ $marsruts->id }} | {{ $marsruts->apraksts }}@endif
                                @endforeach
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection


