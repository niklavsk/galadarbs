@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header">Darbinieka informācija</h4>
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
                                        <td>{{$employee->adrese}}</td>
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
                                    </tr>

                                    @foreach($jobs as $job)
                                        <tr>
                                            <td>{{$job->nosaukums}}</td>
                                            <td>{{$job->nodala}}</td>
                                            <td>{{$job->depo}}</td>
                                            <td>{{$job->stundas_likme}}</td>
                                            <td>{{$job->darba_uzsaksanas_datums}}</td>
                                            <td>{{$job->darba_beigsanas_datums}}</td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div></div>


@endsection
