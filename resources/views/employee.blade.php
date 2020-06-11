@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header">Darbinieks</h4>
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
                                        <th class="text-md-right mr-1">Personas kods</th>
                                        <td>{{$employee->pk}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-md-right mr-1">Adrese</th>
                                        <td>@if($employee->iela != "" && $employee-> majas_nr != ""){{ $employee->iela }} {{ $employee-> majas_nr }}, @endif
                                            @if($employee->majas_nosaukums != ""){{ $employee->majas_nosaukums }}, @endif
                                            @if($employee->pilseta != ""){{ $employee->pilseta }}, @endif
                                            @if($employee->novads != ""){{ $employee->novads }}, @endif
                                            @if($employee->pagasts != ""){{ $employee->pagasts }}, @endif
                                            {{ $employee->valsts }},
                                            {{ $employee->pasta_indekss }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-md-right mr-1">Tālrunis</th>
                                        <td>{{$employee->talrunis}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-md-right mr-1">Epasts</th>
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
                                        <th>Amata nosaukums</th>
                                        <th>Nodaļa</th>
                                        <th>Depo</th>
                                        <th>Stundas likme</th>
                                        <th>Darba uzsākšanas datums</th>
                                        <th>Darba beigšanas datums</th>
                                        <th><a href="{{ url('add/job/employee', $employee->empid) }}" class="btn btn-primary">Pievienot amatu</a></th>
                                    </tr>

                                    @foreach($jobs as $job)
                                        <tr>
                                            <td>{{$job->nosaukums}}</td>
                                            <td>{{$job->nodala}}</td>
                                            <td>{{$job->depo}}</td>
                                            <td>{{$job->stundas_likme}}</td>
                                            <td>{{$job->darba_uzsaksanas_datums}}</td>
                                            <td>{{$job->darba_beigsanas_datums}}</td>
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
