@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Rediģēt nodaļu</h4>
                </div>
                <div class="card-body">
                    <form action="{{action('DepController@update', ['id' => $department->id])}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <div class="form-group row {{ $errors->has('apraksts') ? 'has-error' : ''}}">
                            <label for="apraksts" class="control-label text-md-right col-md-4">Apraksts</label>

                            <input class="form-control col-md-6 {{$errors->has('apraksts') ? ' is-invalid' : '' }}"
                                   name="apraksts" type="text" id="apraksts" value="{{ $department->apraksts }}">
                            @if ($errors->has('apraksts'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('apraksts') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('epasts') ? 'has-error' : ''}}">
                            <label for="epasts" class="control-label text-md-right col-md-4">E-pasts</label>

                            <input class="form-control col-md-6 {{$errors->has('epasts') ? ' is-invalid' : '' }}"
                                   name="epasts" type="text" id="epasts" value="{{ $department->epasts }}">
                            @if ($errors->has('epasts'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('epasts') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('kontakttalrunis') ? 'has-error' : ''}}">
                            <label for="kontakttalrunis" class="control-label text-md-right col-md-4">Kontakttālrunis</label>

                            <input class="form-control col-md-6 {{$errors->has('kontakttalrunis') ? ' is-invalid' : '' }}"
                                   name="kontakttalrunis" type="text" id="kontakttalrunis" value="{{ $department->kontakttalrunis }}">
                            @if ($errors->has('kontakttalrunis'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('kontakttalrunis') }}</strong></span>
                            @endif
                        </div>


                        <div class="form-group row {{ $errors->has('nodalas_vaditajs') ? 'has-error' : ''}}">
                            <label for="nodalas_vaditajs" class="control-label text-md-right col-md-4">Nodaļas vadītājs</label>

                            <select name="nodalas_vaditajs" size="1"
                                    class="form-control col-md-6 {{$errors->has('nodalas_vaditajs') ? ' is-invalid' : '' }}"
                                    id="nodalas_vaditajs">
                                <option value=""></option>
                                @foreach($directors as $director)
                                    <option value="{{ $director->director_id }}"
                                        @if($department->nodalas_vaditajs == $director->director_id) selected @endif>{{ $director->vards }} {{ $director->uzvards }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('nodalas_vaditajs'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('nodalas_vaditajs') }}</strong></span>
                            @endif
                        </div>


                        <div class="form-group row {{ $errors->has('atrasanas_vieta') ? 'has-error' : ''}}">
                            <label for="atrasanas_vieta" class="control-label text-md-right col-md-4">Atrašanās vieta</label>

                            <select name="atrasanas_vieta" size="1"
                                    class="form-control col-md-6 {{$errors->has('atrasanas_vieta') ? ' is-invalid' : '' }}"
                                    id="atrasanas_vieta">
                                <option value=""></option>
                                @foreach($addresses as $address)
                                    <option value="{{ $address->id }}"
                                            @if($department->atrasanas_vieta == $address->id) selected @endif>

                                        {{ $address->iela }} {{ $address-> majas_nr }},
                                        @if($address->pilseta != ""){{ $address->pilseta }}, @endif
                                        @if($address->novads != ""){{ $address->novads }}, @endif
                                        @if($address->pagasts != ""){{ $address->pagasts }}, @endif
                                        {{ $address->pasta_indekss }}

                                    </option>
                                @endforeach
                            </select>

                            @if ($errors->has('atrasanas_vieta'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('atrasanas_vieta') }}</strong></span>
                            @endif
                        </div>

                        <input type="submit" value="Rediģēt" class="btn btn-primary btn-block mx-md-auto col-md-8">

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



