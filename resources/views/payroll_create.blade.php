@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header">{{ __('messages.Create_payroll') }}</h4>
                <div class="card-body">

                    @if($error == true)
                        <div class="container-md text-md-center col-md-10">
                            <p class="alert alert-danger"><strong>{{ __('alerts.Incorrect_data_error') }}</strong></p>
                        </div>
                    @endif

                    <form action="{{action('PayController@store')}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <table width="100%" class="table table-striped text-md-center">
                            <tr>
                                <th>{{ __('messages.Position') }}</th>
                                <th>{{ __('messages.Department') }}</th>
                                <th>{{ __('messages.Depot') }}</th>
                                <th>{{ __('messages.Employee') }}</th>
                                <th>{{ __('messages.Hourly_rate') }}</th>
                                <th>{{ __('messages.Hours_worked') }}</th>
                            </tr>

                        @for($i = 0; $i < count($employees); $i++)

                                <tr>
                                    <td>{{ $employees[$i]->nosaukums }}</td>
                                    <td>{{ $employees[$i]->nodala }}</td>
                                    <td>{{ $employees[$i]->depo }}</td>
                                    <td>{{ $employees[$i]->vards }} {{ $employees[$i]->uzvards }}</td>
                                    <td>{{ $employees[$i]->stundas_likme }}</td>
                                    <td>
                                        <div class="form-group {{ $errors->has($i) ? 'has-error' : ''}}">
                                            <input class="form-control col {{$errors->has($i) ? ' is-invalid' : '' }}"
                                                   name="{{ $i }}" type="text" id="{{ $i }}" value="0">
                                            @if ($errors->has($i))
                                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first($i) }}</strong></span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>

                        @endfor

                        </table>

                        <input type="submit" value="{{ __('messages.Create') }}" class="btn btn-primary btn-block col-md-4 mx-md-auto">

                    </form>
                </div>
            </div></div></div>

@endsection
