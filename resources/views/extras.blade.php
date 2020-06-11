@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline-block">Saraksts ar visām papildus iespējām</h4>
                </div>

                <div class="card-body">

                    <div class="btn-group-vertical mx-md-auto d-md-block h4">

                        <h4 class="d-inline-block">Neizmantotās adreses</h4>

                        <a href="{{ url('create/address') }}" class="btn btn-primary float-right col-md-3">Pievienot adresi</a>

                    </div>

                    @if(count($addresses) == 0)
                        <h5 class="text-md-center alert alert-warning">Neaizpildīto adrešu nav!</h5>
                    @else
                        <div class="row">
                            <div class="col-md">
                                <table class="table table-hover" width="100%">
                                    <tr>
                                        <th>Valsts</th>
                                        <th>Novads</th>
                                        <th>Pilseta</th>
                                        <th>Iela</th>
                                        <th>Mājas numurs</th>
                                        <th>Pagasts</th>
                                        <th>Mājas nosaukums</th>
                                        <th>Pasta indekss</th>
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
                                            <td><a href="{{ url('destroy/address', ['id' => $address->id]) }}" class="btn btn-primary float-center">Izdzēst adresi</a></td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    @endif


                    <div class="btn-group-vertical mx-md-auto d-md-block h4">

                        <h4 class="d-inline-block">Brīvie amati</h4>

                        <a href="{{ url('create/job') }}" class="btn btn-primary float-right col-md-3">Pievienot amatu</a>

                    </div>

                    @if(count($jobs) == 0)
                        <h5 class="text-md-center alert alert-warning">Brīvo amatu nav!</h5>
                    @else
                    <div class="row">
                        <div class="col-md">
                            <table class="table table-hover" width="100%">
                                <tr>
                                    <th>Amata nosaukums</th>
                                    <th>Nodaļa</th>
                                    <th>Depo</th>
                                    <th>Stundas likme</th>
                                    <th></th>
                                </tr>

                                @foreach($jobs as $job)
                                    <tr>
                                        <td>{{$job->nosaukums}}</td>
                                        <td>{{$job->nodala}}</td>
                                        <td>{{$job->depo}}</td>
                                        <td>{{$job->stundas_likme}}</td>
                                        <td><a href="{{ url('destroy/job', ['id' => $job->id]) }}" class="btn btn-primary float-center">Izdzēst amatu</a></td>
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




