@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Rediģēt darbinieku</h4>
                </div>
                <div class="card-body">
                    <form action="{{action('EmployeeController@update', ['id' => $employee->id])}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <div class="form-group row {{ $errors->has('pk') ? 'has-error' : ''}}">
                            <label for="pk" class="control-label text-md-right col-md-4">Personas kods</label>

                            <input class="form-control col-md-6 {{$errors->has('pk') ? ' is-invalid' : '' }}"
                                   name="pk" type="text" id="pk" value="{{ $employee->pk }}">
                            @if ($errors->has('pk'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('pk') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('vards') ? 'has-error' : ''}}">
                            <label for="vards" class="control-label text-md-right col-md-4">Vārds</label>

                            <input class="form-control col-md-6 {{$errors->has('vards') ? ' is-invalid' : '' }}"
                                   name="vards" type="text" id="vards" value="{{ $employee->vards }}">
                            @if ($errors->has('vards'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('vards') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('otrais_vards') ? 'has-error' : ''}}">
                            <label for="otrais_vards" class="control-label text-md-right col-md-4">Otrais vārds</label>

                            <input class="form-control col-md-6 {{$errors->has('otrais_vards') ? ' is-invalid' : '' }}"
                                   name="otrais_vards" type="text" id="otrais_vards" value="{{ $employee->otrais_vards }}">
                            @if ($errors->has('otrais_vards'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('otrais_vards') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('uzvards') ? 'has-error' : ''}}">
                            <label for="uzvards" class="control-label text-md-right col-md-4">Uzvārds</label>

                            <input class="form-control col-md-6 {{$errors->has('uzvards') ? ' is-invalid' : '' }}"
                                   name="uzvards" type="text" id="uzvards" value="{{ $employee->uzvards }}">
                            @if ($errors->has('uzvards'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('uzvards') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('talrunis') ? 'has-error' : ''}}">
                            <label for="talrunis" class="control-label text-md-right col-md-4">Tālrunis</label>

                            <input class="form-control col-md-6 {{$errors->has('talrunis') ? ' is-invalid' : '' }}"
                                   name="talrunis" type="text" id="talrunis" value="{{ $employee->talrunis }}">
                            @if ($errors->has('talrunis'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('talrunis') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('epasts') ? 'has-error' : ''}}">
                            <label for="epasts" class="control-label text-md-right col-md-4">E-pasts</label>

                            <input class="form-control col-md-6 {{$errors->has('epasts') ? ' is-invalid' : '' }}"
                                   name="epasts" type="email" id="epasts" value="{{ $employee->epasts }}">
                            @if ($errors->has('epasts'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('epasts') }}</strong></span>
                            @endif
                        </div>


                        <div class="row col-md-11 mx-md-auto">
                            <h5>Dzīvesvieta:</h5>
                        </div>

                        <div class="form-group row {{ $errors->has('valsts') ? 'has-error' : ''}}">
                            <label for="valsts" class="control-label text-md-right col-md-4">Valsts</label>

                            <input class="form-control col-md-6 {{$errors->has('valsts') ? ' is-invalid' : '' }}"
                                   name="valsts" type="text" id="valsts" value="{{ $employee->valsts }}">
                            @if ($errors->has('valsts'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('valsts') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('novads') ? 'has-error' : ''}}">
                            <label for="novads" class="control-label text-md-right col-md-4">Novads</label>

                            <input class="form-control col-md-6 {{$errors->has('novads') ? ' is-invalid' : '' }}"
                                   name="novads" type="text" id="novads" value="{{ $employee->novads }}">
                            @if ($errors->has('novads'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('novads') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('pilseta') ? 'has-error' : ''}}">
                            <label for="pilseta" class="control-label text-md-right col-md-4">Pilsēta</label>

                            <input class="form-control col-md-6 {{$errors->has('pilseta') ? ' is-invalid' : '' }}"
                                   name="pilseta" type="text" id="pilseta" value="{{ $employee->pilseta }}">
                            @if ($errors->has('pilseta'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('pilseta') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('iela') ? 'has-error' : ''}}">
                            <label for="iela" class="control-label text-md-right col-md-4">Iela</label>

                            <input class="form-control col-md-6 {{$errors->has('iela') ? ' is-invalid' : '' }}"
                                   name="iela" type="text" id="iela" value="{{ $employee->iela }}">
                            @if ($errors->has('iela'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('iela') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('majas_nr') ? 'has-error' : ''}}">
                            <label for="majas_nr" class="control-label text-md-right col-md-4">Mājas numurs</label>

                            <input class="form-control col-md-6 {{$errors->has('majas_nr') ? ' is-invalid' : '' }}"
                                   name="majas_nr" type="text" id="majas_nr" value="{{ $employee->iela }}">
                            @if ($errors->has('majas_nr'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('majas_nr') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('pagasts') ? 'has-error' : ''}}">
                            <label for="pagasts" class="control-label text-md-right col-md-4">Pagasts</label>

                            <input class="form-control col-md-6 {{$errors->has('pagasts') ? ' is-invalid' : '' }}"
                                   name="pagasts" type="text" id="pagasts" value="{{ $employee->pagasts }}">
                            @if ($errors->has('pagasts'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('pagasts') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('majas_nosaukums') ? 'has-error' : ''}}">
                            <label for="majas_nosaukums" class="control-label text-md-right col-md-4">Mājas nosaukums</label>

                            <input class="form-control col-md-6 {{$errors->has('majas_nosaukums') ? ' is-invalid' : '' }}"
                                   name="majas_nosaukums" type="text" id="majas_nosaukums" value="{{ $employee->majas_nosaukums }}">
                            @if ($errors->has('majas_nosaukums'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('majas_nosaukums') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('pasta_indekss') ? 'has-error' : ''}}">
                            <label for="pasta_indekss" class="control-label text-md-right col-md-4">Pasta indekss</label>

                            <input class="form-control col-md-6 {{$errors->has('pasta_indekss') ? ' is-invalid' : '' }}"
                                   name="pasta_indekss" type="text" id="pasta_indekss" value="{{ $employee->pasta_indekss }}">
                            @if ($errors->has('pasta_indekss'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('pasta_indekss') }}</strong></span>
                            @endif
                        </div>

                        <input type="submit" value="Izveidot" class="btn btn-primary btn-block mx-md-auto col-md-8">

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

