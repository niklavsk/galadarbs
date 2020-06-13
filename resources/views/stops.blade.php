@extends('layouts.app')
@section('content')

    <script type="text/javascript">
        $(document).ready(function () {
            $("#search").keyup(function () {
                let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'POST',
                    url: "{{ route('stop.search') }}",
                    data: {
                        _token: CSRF_TOKEN,
                        search: $("#search").val()
                    },
                    success: function (data) {
                        $("#stop-list").html('');
                        $.each(data, function (i, stop) {
                            let c = '<a class="btn btn-light text-md-left"' +
                            'href="/stop/' + stop.id + '"><span class="h5">' + stop.nosaukums + ' - ' + stop.iela + ' ' + stop.majas_nr + '</span></a>';
                            $("#stop-list").append(c);
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
                    <h4 class="d-inline-block">{{ __('messages.All_stations_list') }}</h4>
                    <div class="float-right">
                        <div class="my-auto d-inline-block mr-3">
                            <input class="form-control" type="text" id="search"
                                   placeholder="{{ __('messages.Search') }}">
                        </div>
                        <a href="{{ url('create/stop') }}"
                           class="btn btn-primary float-right">{{ __('messages.Add_station') }}</a>
                    </div>
                </div>

                <div class="card-body">

                    @if(count($stops) == 0)

                        <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_stations') }}</h5>

                    @else
                        <div class="btn-group-vertical mx-md-auto d-md-block col-md-8 h4" id="stop-list">
                            @foreach ($stops as $stop)
                                <a class="btn btn-light text-md-left"
                                   href="{{ url('stop', $stop->id) }}"><span class="h5">{{ $stop->nosaukums }} - {{ $stop->iela }} {{ $stop->majas_nr }} </span></a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
