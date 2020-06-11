@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Pievienot lietotāju</h4>
                </div>
                <div class="card-body">
                    <form action="{{action('UserController@store')}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <div class="form-group row {{ $errors->has('epasts') ? 'has-error' : ''}}">
                            <label for="epasts" class="control-label text-md-right col-md-4">E-pasts</label>

                            <input class="form-control col-md-6 {{$errors->has('epasts') ? ' is-invalid' : '' }}"
                                   name="epasts" type="text" id="epasts" value="{{ $user->epasts }}">
                            @if ($errors->has('epasts'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('epasts') }}</strong></span>
                            @endif
                        </div>


                        <div class="form-group row {{ $errors->has('nodalas_vaditajs') ? 'has-error' : ''}}">
                            <label for="nodalas_vaditajs" class="control-label text-md-right col-md-4">Nodaļas vadītājs</label>

                            <select name="nodalas_vaditajs" size="1"
                                    class="form-control col-md-6 {{$errors->has('nodalas_vaditajs') ? ' is-invalid' : '' }}"
                                    id="depo_vaditajs">
                                <option value=""></option>
                                @foreach($roles as $role)
                                    <option value="{{ $director->director_id }}">{{ $director->vards }} {{ $director->uzvards }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('nodalas_vaditajs'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('nodalas_vaditajs') }}</strong></span>
                            @endif
                        </div>

                        <input type="submit" value="Izveidot" class="btn btn-primary btn-block mx-md-auto col-md-8">

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
