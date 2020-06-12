@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <h4 class="card-header">{{ __('messages.Employee') }}</h4>

                <div class="card-body">

                    <div class="container-md">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-thumbnail img-fluid" src="{{ url('uploads/white-and-black-art-png-clip-art-thumbnail.png') }}">
                            </div>

                            <div class="col-md-9">
                                <h5 class="font-weight-bold text-md-center">{{ $employee->vards }} {{ $employee->otrais_vards}} {{ $employee->uzvards }}</h5>
                                <table class="table table-borderless" width="100%">
                                    <tr>
                                        <th class="text-md-right mr-1">{{ __('messages.pers_ID') }}</th>
                                        <td>{{$employee->pk}}</td>
                                    </tr>
                                    <tr>

                                        <th class="text-md-right mr-1">{{ __('messages.Address') }}</th>
                                        <td>@if($employee->iela != "" && $employee-> majas_nr != ""){{ $employee->iela }} {{ $employee-> majas_nr }}, @endif
                                            @if($employee->majas_nosaukums != ""){{ $employee->majas_nosaukums }}, @endif
                                            @if($employee->pilseta != ""){{ $employee->pilseta }}, @endif
                                            @if($employee->novads != ""){{ $employee->novads }}, @endif
                                            @if($employee->pagasts != ""){{ $employee->pagasts }}, @endif
                                            {{ $employee->valsts }},
                                            {{ $employee->pasta_indekss }}
                                        </td>

                                    </tr>
                                    <tr>
                                        <th class="text-md-right mr-1">{{ __('messages.Telephone_number') }}</th>
                                        <td>{{$employee->talrunis}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-md-right mr-1">{{ __('messages.Email') }}</th>
                                        <td>{{$employee->epasts}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-md">
                                <table class="table table-hover" width="100%">
                                    <tr>

                                        <th>{{ __('messages.Position') }}</th>
                                        <th>{{ __('messages.Department') }}</th>
                                        <th>{{ __('messages.Depot') }}</th>
                                        <th>{{ __('messages.Hourly_rate') }}</th>
                                        <th>{{ __('messages.Job_start_date') }}</th>
                                        <th>{{ __('messages.Job_end_date') }}</th>
                                        <th><a href="{{ url('add/job/employee', $employee->empid) }}" class="btn btn-primary">{{ __('messages.Add_position') }}</a></th>

                                    </tr>

                                    @foreach($jobs as $job)
                                        <tr>
                                            <td>{{$job->nosaukums}}</td>
                                            <td>
                                                @foreach($nodalas as $nodala)
                                                    @if($nodala->id == $job->nodala){{ $nodala->apraksts }}@endif
                                                @endforeach
                                            </td>
                                            <td>{{ $job->depo }}</td>
                                            <td>
                                                @if ( App::getLocale() == 'lv')&euro;{{ number_format ($job->stundas_likme, 2, ',', ' ') }}
                                                @elseif ( App::getLocale() == 'en')&euro;{{ number_format ($job->stundas_likme, 2, '.', ',') }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ( App::getLocale() == 'lv')
                                                    {{ date('d.m.Y', strtotime($job->darba_uzsaksanas_datums)) }}
                                                @elseif ( App::getLocale() == 'en')
                                                    {{ date('m/d/Y', strtotime($job->darba_uzsaksanas_datums)) }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ( App::getLocale() == 'lv' && $job->darba_beigsanas_datums != "")
                                                    {{ date('d.m.Y', strtotime($job->darba_beigsanas_datums)) }}
                                                @elseif ( App::getLocale() == 'en' && $job->darba_beigsanas_datums != "")
                                                    {{ date('m/d/Y', strtotime($job->darba_beigsanas_datums)) }}
                                                @endif
                                            </td>
                                            <td>@if($job->darba_beigsanas_datums == "")
                                                <a href="{{ url('remove/job/employee', [$employee->empid, $job->id]) }}" class="btn btn-secondary">Atskaitīt no amata</a>
                                                    @else <button type="button" class="btn btn-secondary" disabled>Atskaitīt no amata</button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-center p-md-3">
                    <a href="{{ url('edit/employee', $employee->empid) }}" class=" btn btn-primary">Rediģēt darbinieku</a>
                    @if($jobCount != 0)
                        <a href="{{ url('destroy/employee', $employee->empid) }}" class="btn btn-secondary">Atskaitīt darbinieku no amatiem</a>
                    @else <button type="button" class="btn btn-secondary" disabled>Atskaitīt darbinieku no amatiem</button>
                    @endif

                </div>
            </div></div></div>


@endsection
