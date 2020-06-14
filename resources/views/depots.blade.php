@extends('layouts.app')
@section('content')

    <script type="text/javascript">
        $(document).ready(function () {
            $("#search").keyup(function () {
                let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'POST',
                    url: "{{ route('depot.search') }}",
                    data: {
                        _token: CSRF_TOKEN,
                        search: $("#search").val()
                    },
                    success: function (data) {
                        $("#depot-list").html('');
                        $.each(data, function (i, depot) {
                            let c = '<a class="btn btn-light text-md-left" href="/depot/' +
                                depot.id + '"><span class="h5">' + depot.id + ' - ' + depot.apraksts + '</span></a>';
                            $("#depot-list").append(c);
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
                    <h4 class="d-inline-block">{{ __('messages.All_depot_list') }}</h4>

                    <div class="float-right">
                        <div class="my-auto d-inline-block mr-3">
                            <input class="form-control" type="text" id="search"
                                   placeholder="{{ __('messages.Search') }}">
                        </div>
                        @if(Auth::user()->role == 1)
                            <a href="{{ url('create/depot') }}" class="btn btn-primary float-right">{{ __('messages.Add_depot') }}</a>
                        @endif
                    </div>

                </div>

                <div class="card-body">

                    @if(count($depots) == 0)
                        <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_depot') }}</h5>

                    @else
                        <div class="btn-group-vertical mx-md-auto d-md-block col-md-10 h4" id="depot-list">
                            @foreach ($depots as $depot)
                                <a class="btn btn-light text-md-left"
                                       href="{{ url('depot', $depot->id) }}"><span class="h5">{{ $depot->id }} - {{ $depot->apraksts }}</span></a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
