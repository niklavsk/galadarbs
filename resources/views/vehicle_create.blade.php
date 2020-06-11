@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header">{{ __('messages.Add_vehicle') }}</h4>

                <div class="card-body">
                    <form action="{{action('VehicleController@store')}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <div class="form-group row {{ $errors->has('razosanas_datums') ? 'has-error' : ''}}">
                            <label for="razosanas_datums" class="control-label text-md-right col-md-4">{{ __('messages.Production_date') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('razosanas_datums') ? ' is-invalid' : '' }}"
                                   name="razosanas_datums" type="date" id="razosanas_datums">
                            @if ($errors->has('razosanas_datums'))
                                <span
                                    class="invalid-feedback text-md-center"><strong>{{ $errors->first('razosanas_datums') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('pedeja_remonta_datums') ? 'has-error' : ''}}">
                            <label for="pedeja_remonta_datums" class="control-label text-md-right col-md-4">
                                {{ __('messages.Last_repair_date') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('pedeja_remonta_datums') ? ' is-invalid' : '' }}"
                                   name="pedeja_remonta_datums" type="date" id="pedeja_remonta_datums">
                            @if ($errors->has('pedeja_remonta_datums'))
                                <span
                                    class="invalid-feedback text-md-center"><strong>{{ $errors->first('pedeja_remonta_datums') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('tehniskas_parbaudes_termins') ? 'has-error' : ''}}">
                            <label for="tehniskas_parbaudes_termins" class="control-label text-md-right col-md-4">
                                {{ __('messages.Technical_inspection_valid_till') }}
                            </label>

                            <input
                                class="form-control col-md-6 {{$errors->has('tehniskas_parbaudes_termins') ? ' is-invalid' : '' }}"
                                name="tehniskas_parbaudes_termins" type="date" id="tehniskas_parbaudes_termins">
                            @if ($errors->has('tehniskas_parbaudes_termins'))
                                <span
                                    class="invalid-feedback text-md-center"><strong>{{ $errors->first('tehniskas_parbaudes_termins') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('razotajs') ? 'has-error' : ''}}">
                            <label for="razotajs" class="control-label text-md-right col-md-4">{{ __('messages.Manufacturer') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('razotajs') ? ' is-invalid' : '' }}"
                                   name="razotajs"
                                   type="text" id="razotajs">
                            @if ($errors->has('razotajs'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('razotajs') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('depo_nr') ? 'has-error' : ''}}">
                            <label for="depo_nr" class="control-label text-md-right col-md-4">Depo</label>

                            <select name="depo_nr" size="1"
                                    class="form-control col-md-6 {{$errors->has('depo_nr') ? ' is-invalid' : '' }}"
                                    id="depo_nr">
                                <option value=""></option>
                                @foreach($depots as $depot)
                                    <option value="{{ $depot->id }}">{{ $depot->id }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('depo_nr'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('depo_nr') }}</strong></span>
                            @endif
                        </div>


                        <div class="form-group row {{ $errors->has('marsruta_id') ? 'has-error' : ''}}">
                            <label for="marsruta_id" class="control-label text-md-right col-md-4">{{ __('messages.Route') }}</label>

                            <select name="marsruta_id" size="1"
                                    class="form-control col-md-6 {{$errors->has('marsruta_id') ? ' is-invalid' : '' }}"
                                    id="marsruta_id">
                                <option value=""></option>
                                @foreach($routes as $route)
                                    <option value="{{ $route->id }}">{{ $route->nosaukums }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('marsruta_id'))
                                <span
                                    class="invalid-feedback text-md-center"><strong>{{ $errors->first('marsruta_id') }}</strong></span>
                            @endif
                        </div>

                        <input type="submit" value="{{ __('messages.Create') }}" class="btn btn-primary btn-block col-md-8 mx-md-auto">

                    </form>
                </div>
            </div></div></div>

@endsection

