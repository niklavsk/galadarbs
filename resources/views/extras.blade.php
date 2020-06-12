@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline-block">{{ __('messages.All_extras_list') }}</h4>
                </div>

                <div class="card-body">

                    <div class="btn-group-vertical mx-md-auto d-md-block h4">

                        <h4 class="d-inline-block">{{ __('messages.Unused_addresses') }}</h4>

                        <a href="{{ url('create/address') }}" class="btn btn-primary float-right col-md-3">{{ __('messages.Add_address') }}</a>

                    </div>

                    @if(count($addresses) == 0)
                        <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_filled_addresses') }}</h5>
                    @else
                        <div class="row">
                            <div class="col-md">
                                <table class="table table-hover" width="100%">
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

                        <a href="{{ url('create/job') }}" class="btn btn-primary float-right col-md-3">{{ __('messages.Add_position') }}</a>

                    </div>

                    @if(count($jobs) == 0)
                        <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_vacancies') }}</h5>
                    @else
                    <div class="row">
                        <div class="col-md">
                            <table class="table table-hover" width="100%">
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




