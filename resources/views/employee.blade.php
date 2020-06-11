@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header">{{ __('messages.Employee_info') }}</h4>
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
                                        <td>{{$employee->adrese}}</td>
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
