@extends('layouts.app')
@section('content')

    <script type="text/javascript">
        $(document).ready(function () {
            $("#search-position").keyup(function () {
                let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'POST',
                    url: "{{ route('extra.searchPosition') }}",
                    data: {
                        _token: CSRF_TOKEN,
                        search: $("#search-position").val()
                    },
                    success: function (data) {
                        $("#position-table").html('<tr>\n' +
                            '                                    <th>{{ __('messages.Position') }}</th>\n' +
                            '                                    <th>{{ __('messages.Department') }}</th>\n' +
                            '                                    <th>{{ __('messages.Depot') }}</th>\n' +
                            '                                    <th>{{ __('messages.Hourly_rate') }}</th>\n' +
                            '                                    <th></th>\n' +
                            '                                </tr>');
                        $.each(data, function (i, job) {
                            let c = '<tr>\n' +
                                '                                        <td>' + job.nosaukums + '</td>\n' +
                                '                                        <td>\n' + job.nodala
                                '                                        </td>\n' +
                                '                                        <td>' + job.depo + '</td>\n' +
                                '                                        <td>\n' +
                                                                             @if ( App::getLocale() == 'lv')
                                '                                            &euro;' + new Intl.NumberFormat('lv-LV').format(job.stundas_likme) + '\n' +
                                                                             @elseif ( App::getLocale() == 'en')
                                '                                            &euro;' + new Intl.NumberFormat('en-US').format(job.stundas_likme) + '\n' +
                                                                             @endif
                                '                                        </td>\n' +
                                '                                        <td><a href="/destroy/job/' + job.id + '" class="btn btn-primary float-center">{{ __('messages.Delete_position') }}</a></td>\n' +
                                '                                    </tr>';
                            $("#position-table").append(c);
                        })
                    }
                })
            });



            $("#search-address").keyup(function () {
                let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'POST',
                    url: "{{ route('extra.searchAddress') }}",
                    data: {
                        _token: CSRF_TOKEN,
                        search: $("#search-address").val()
                    },
                    success: function (data) {
                        $("#address-table").html('<tr>\n' +
                            '                                        <th>{{ __('messages.Country') }}</th>\n' +
                            '                                        <th>{{ __('messages.Municipality') }}</th>\n' +
                            '                                        <th>{{ __('messages.City') }}</th>\n' +
                            '                                        <th>{{ __('messages.Street') }}</th>\n' +
                            '                                        <th>{{ __('messages.House') }}</th>\n' +
                            '                                        <th>{{ __('messages.Parish') }}</th>\n' +
                            '                                        <th>{{ __('messages.House_name') }}</th>\n' +
                            '                                        <th>{{ __('messages.Postal_code') }}</th>\n' +
                            '                                        <th></th>\n' +
                            '                                    </tr>');
                        $.each(data, function (i, address) {
                            let c = '<tr>' +
                                '<td>' + address.valsts + '</td>'+
                                '<td>' + address.novads + '</td>'+
                                '<td>' + address.pilseta + '</td>'+
                                '<td>' + address.iela + '</td>'+
                                '<td>' + address.majas_nr + '</td>'+
                                '<td>' + address.pagasts + '</td>'+
                                '<td>' + address.majas_nosaukums + '</td>'+
                                '<td>' + address.pasta_indekss + '</td>'+
                                '<td><a href="/destroy/address/' + address.id +'" class="btn btn-primary float-center">{{ __('messages.Delete_address') }}</a></td>'+
                            '</tr>';
                            $("#address-table").append(c);
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
                    <h4 class="d-inline-block">{{ __('messages.All_extras_list') }}</h4>
                </div>

                <div class="card-body">

                    <div class="btn-group-vertical mx-md-auto d-md-block h4">

                        <h4 class="d-inline-block">{{ __('messages.Unused_addresses') }}</h4>

                        <div class="float-right">
                            <div class="my-auto d-inline-block mr-5">
                                <input class="form-control" type="text" id="search-address"
                                       placeholder="{{ __('messages.Search') }}">
                            </div>
                            <a href="{{ url('create/address') }}"
                               class="btn btn-primary float-right col-md-3">{{ __('messages.Add_address') }}</a>
                        </div>

                    </div>

                    @if(count($addresses) == 0)
                        <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_filled_addresses') }}</h5>
                    @else
                        <div class="row">
                            <div class="col-md">
                                <table class="table table-hover" id="address-table" width="100%">
                                    <tr>
                                        <th>{{ __('messages.Country') }}</th>
                                        <th>{{ __('messages.Municipality') }}</th>
                                        <th>{{ __('messages.City') }}</th>
                                        <th>{{ __('messages.Street') }}</th>
                                        <th>{{ __('messages.House') }}</th>
                                        <th>{{ __('messages.Parish') }}</th>
                                        <th>{{ __('messages.House_name') }}</th>
                                        <th>{{ __('messages.Postal_code') }}</th>
                                        <th></th>
                                    </tr>

                                    @foreach($addresses as $address)
                                        <tr>
                                            <td>{{$address->valsts}}</td>
                                            <td>{{$address->novads}}</td>
                                            <td>{{$address->pilseta}}</td>
                                            <td>{{$address->iela}}</td>
                                            <td>{{$address->majas_nr}}</td>
                                            <td>{{$address->pagasts}}</td>
                                            <td>{{$address->majas_nosaukums}}</td>
                                            <td>{{$address->pasta_indekss}}</td>
                                            <td><a href="{{ url('destroy/address', ['id' => $address->id]) }}" class="btn btn-primary float-center">{{ __('messages.Delete_address') }}</a></td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    @endif


                    <div class="btn-group-vertical mx-md-auto d-md-block h4">

                        <h4 class="d-inline-block">{{ __('messages.Vacancies') }}</h4>

                        <div class="float-right">
                            <div class="my-auto d-inline-block mr-3">
                                <input class="form-control" type="text" id="search-position"
                                       placeholder="{{ __('messages.Search') }}">
                            </div>
                            <a href="{{ url('create/job') }}"
                               class="btn btn-primary float-right col-md-3">{{ __('messages.Add_position') }}</a>
                        </div>

                    </div>

                    @if(count($jobs) == 0)
                        <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_vacancies') }}</h5>
                    @else
                    <div class="row">
                        <div class="col-md">
                            <table class="table table-hover" width="100%" id="position-table">
                                <tr>
                                    <th>{{ __('messages.Position') }}</th>
                                    <th>{{ __('messages.Department') }}</th>
                                    <th>{{ __('messages.Depot') }}</th>
                                    <th>{{ __('messages.Hourly_rate') }}</th>
                                    <th></th>
                                </tr>

                                @foreach($jobs as $job)
                                    <tr>
                                        <td>{{$job->nosaukums}}</td>
                                        <td>
                                            @foreach($nodalas as $nodala)
                                                @if($nodala->id == $job->nodala){{ $nodala->apraksts }}@endif
                                            @endforeach
                                        </td>
                                        <td>{{$job->depo}}</td>
                                        <td>
                                            @if ( App::getLocale() == 'lv')
                                            &euro;{{ number_format ($job->stundas_likme, 2, ',', ' ') }}
                                            @elseif ( App::getLocale() == 'en')
                                            &euro;{{ number_format ($job->stundas_likme, 2, '.', ',') }}
                                            @endif
                                        </td>
                                        <td><a href="{{ url('destroy/job', ['id' => $job->id]) }}" class="btn btn-primary float-center">{{ __('messages.Delete_position') }}</a></td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>
                    @endif


                </div>
            </div>
        </div>
    </div>

@endsection




