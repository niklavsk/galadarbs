@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('messages.Add_employee') }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{action('EmployeeController@store')}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <div class="form-group row {{ $errors->has('pk') ? 'has-error' : ''}}">
                            <label for="pk" class="control-label text-md-right col-md-4">{{ __('messages.pers_ID') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('pk') ? ' is-invalid' : '' }}"
                                   name="pk" type="text" id="pk">
                            @if ($errors->has('pk'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('pk') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('vards') ? 'has-error' : ''}}">
                            <label for="vards" class="control-label text-md-right col-md-4">{{ __('messages.First_name') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('vards') ? ' is-invalid' : '' }}"
                                   name="vards" type="text" id="vards">
                            @if ($errors->has('vards'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('vards') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('otrais_vards') ? 'has-error' : ''}}">
                            <label for="otrais_vards" class="control-label text-md-right col-md-4">{{ __('messages.Second_name') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('otrais_vards') ? ' is-invalid' : '' }}"
                                   name="otrais_vards" type="text" id="otrais_vards">
                            @if ($errors->has('otrais_vards'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('otrais_vards') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('uzvards') ? 'has-error' : ''}}">
                            <label for="uzvards" class="control-label text-md-right col-md-4">{{ __('messages.Last_name') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('uzvards') ? ' is-invalid' : '' }}"
                                   name="uzvards" type="text" id="uzvards">
                            @if ($errors->has('uzvards'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('uzvards') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('talrunis') ? 'has-error' : ''}}">
                            <label for="talrunis" class="control-label text-md-right col-md-4">{{ __('messages.Telephone_number') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('talrunis') ? ' is-invalid' : '' }}"
                                   name="talrunis" type="text" id="talrunis">
                            @if ($errors->has('talrunis'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('talrunis') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('epasts') ? 'has-error' : ''}}">
                            <label for="epasts" class="control-label text-md-right col-md-4">{{ __('messages.Email') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('epasts') ? ' is-invalid' : '' }}"
                                   name="epasts" type="email" id="epasts">
                            @if ($errors->has('epasts'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('epasts') }}</strong></span>
                            @endif
                        </div>

                        <div class="row col-md-11 mx-md-auto">
                            <h5>{{ __('messages.Declarated_address') }}:</h5>
                        </div>

                        <div class="form-group row {{ $errors->has('valsts') ? 'has-error' : ''}}">
                            <label for="valsts" class="control-label text-md-right col-md-4">{{ __('messages.Country') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('valsts') ? ' is-invalid' : '' }}"
                                   name="valsts" type="text" id="valsts">
                            @if ($errors->has('valsts'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('valsts') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('novads') ? 'has-error' : ''}}">
                            <label for="novads" class="control-label text-md-right col-md-4">{{ __('messages.Municipality') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('novads') ? ' is-invalid' : '' }}"
                                   name="novads" type="text" id="novads">
                            @if ($errors->has('novads'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('novads') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('pilseta') ? 'has-error' : ''}}">
                            <label for="pilseta" class="control-label text-md-right col-md-4">{{ __('messages.City') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('pilseta') ? ' is-invalid' : '' }}"
                                   name="pilseta" type="text" id="pilseta">
                            @if ($errors->has('pilseta'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('pilseta') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('iela') ? 'has-error' : ''}}">
                            <label for="iela" class="control-label text-md-right col-md-4">{{ __('messages.Street') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('iela') ? ' is-invalid' : '' }}"
                                   name="iela" type="text" id="iela">
                            @if ($errors->has('iela'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('iela') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('majas_nr') ? 'has-error' : ''}}">
                            <label for="majas_nr" class="control-label text-md-right col-md-4">{{ __('messages.House') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('majas_nr') ? ' is-invalid' : '' }}"
                                   name="majas_nr" type="text" id="majas_nr">
                            @if ($errors->has('majas_nr'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('majas_nr') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('pagasts') ? 'has-error' : ''}}">
                            <label for="pagasts" class="control-label text-md-right col-md-4">{{ __('messages.Parish') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('pagasts') ? ' is-invalid' : '' }}"
                                   name="pagasts" type="text" id="pagasts">
                            @if ($errors->has('pagasts'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('pagasts') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('majas_nosaukums') ? 'has-error' : ''}}">
                            <label for="majas_nosaukums" class="control-label text-md-right col-md-4">{{ __('messages.House_name') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('majas_nosaukums') ? ' is-invalid' : '' }}"
                                   name="majas_nosaukums" type="text" id="majas_nosaukums">
                            @if ($errors->has('majas_nosaukums'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('majas_nosaukums') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('pasta_indekss') ? 'has-error' : ''}}">
                            <label for="pasta_indekss" class="control-label text-md-right col-md-4">{{ __('messages.Postal_code') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('pasta_indekss') ? ' is-invalid' : '' }}"
                                   name="pasta_indekss" type="text" id="pasta_indekss">
                            @if ($errors->has('pasta_indekss'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('pasta_indekss') }}</strong></span>
                            @endif
                        </div>

                        <input type="submit" value="{{ __('messages.Create') }}" class="btn btn-primary btn-block mx-md-auto col-md-8">

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

