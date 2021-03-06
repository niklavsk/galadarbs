@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('messages.Add_position_for_employee') }} - {{ $employee->vards }} {{ $employee->uzvards }} </h4>
                </div>
                <div class="card-body">
                    <form action="{{action('EmployeeController@addJob_store', $employee->id)}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <div class="form-group row {{ $errors->has('job') ? 'has-error' : ''}}">
                            <label for="job" class="control-label text-md-right col-md-4">{{ __('messages.Position') }}</label>

                            <select name="job" size="1"
                                    class="form-control col-md-6 {{$errors->has('job') ? ' is-invalid' : '' }}"
                                    id="job">
                                <option value=""></option>
                                @foreach($jobs as $job)
                                    <option value="{{ $job->id }}">{{ $job->nosaukums }} | {{ __('messages.Department') }}: {{ $job->nodala }} |
                                        {{ __('messages.Depot') }}: {{ $job->depo }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('job'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('job') }}</strong></span>
                            @endif
                        </div>

                        <input type="submit" value="{{ __('messages.Add') }}" class="btn btn-primary btn-block mx-md-auto col-md-8">

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

