@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('messages.Add_position') }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{action('ExtraController@storeJob')}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <div class="form-group row {{ $errors->has('nosaukums') ? 'has-error' : ''}}">
                            <label for="nosaukums" class="control-label text-md-right col-md-4">{{ __('messages.Name') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('nosaukums') ? ' is-invalid' : '' }}"
                                   name="nosaukums" type="text" id="nosaukums">
                            @if ($errors->has('nosaukums'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('nosaukums') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('nodala') ? 'has-error' : ''}}">
                            <label for="nodala" class="control-label text-md-right col-md-4">{{ __('messages.Department') }}</label>

                            <select name="nodala" size="1"
                                    class="form-control col-md-6 {{$errors->has('nodala') ? ' is-invalid' : '' }}"
                                    id="nodala">
                                <option value=""></option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->apraksts }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('nodala'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('nodala') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('depo') ? 'has-error' : ''}}">
                            <label for="depo" class="control-label text-md-right col-md-4">{{ __('messages.Depot') }}</label>

                            <select name="depo" size="1"
                                    class="form-control col-md-6 {{$errors->has('depo') ? ' is-invalid' : '' }}"
                                    id="depo">
                                <option value=""></option>
                                @foreach($depots as $depot)
                                    <option value="{{ $depot->id }}">{{ $depot->id }} | {{ $depot->apraksts }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('depo'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('depo') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('stundas_likme') ? 'has-error' : ''}}">
                            <label for="stundas_likme" class="control-label text-md-right col-md-4">{{ __('messages.Hourly_rate') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('stundas_likme') ? ' is-invalid' : '' }}"
                                   name="stundas_likme" type="text" id="stundas_likme">
                            @if ($errors->has('stundas_likme'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('stundas_likme') }}</strong></span>
                            @endif
                        </div>

                        <input type="submit" value="{{ __('messages.Create') }}" class="btn btn-primary btn-block mx-md-auto col-md-8">

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
