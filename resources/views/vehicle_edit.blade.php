@extends('layouts.app')
@section('content')


    <form action="{{action('VehicleController@update', ['id' => $vehicle->id])}}" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

        <div class="col-2">

            <div class="form-group {{ $errors->has('razosanas_datums') ? 'has-error' : ''}}">
                <label for="razosanas_datums" class="control-label text-md-left">Ražošanas datums</label>

                <input class="form-control {{$errors->has('razosanas_datums') ? ' is-invalid' : '' }}" name="razosanas_datums" type="date" id="razosanas_datums" value="{{ $vehicle->razosanas_datums }}">
                @if ($errors->has('razosanas_datums'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('razosanas_datums') }}</strong></span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('pedeja_remonta_datums') ? 'has-error' : ''}}">
                <label for="pedeja_remonta_datums" class="control-label text-md-left">Pēdējā remonta datums</label>

                <input class="form-control {{$errors->has('pedeja_remonta_datums') ? ' is-invalid' : '' }}" name="pedeja_remonta_datums" type="date" id="pedeja_remonta_datums" value="{{ $vehicle->pedeja_remonta_datums }}">
                @if ($errors->has('pedeja_remonta_datums'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('pedeja_remonta_datums') }}</strong></span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('tehniskas_parbaudes_termins') ? 'has-error' : ''}}">
                <label for="tehniskas_parbaudes_termins" class="control-label text-md-left">Tehniskās pārbaudes termiņš</label>

                <input class="form-control {{$errors->has('tehniskas_parbaudes_termins') ? ' is-invalid' : '' }}" name="tehniskas_parbaudes_termins" type="date" id="tehniskas_parbaudes_termins" value="{{ $vehicle->tehniskas_parbaudes_termins }}">
                @if ($errors->has('tehniskas_parbaudes_termins'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('tehniskas_parbaudes_termins') }}</strong></span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('razotajs') ? 'has-error' : ''}}">
                <label for="razotajs" class="control-label text-md-left">Ražotājs</label>

                <input class="form-control {{$errors->has('razotajs') ? ' is-invalid' : '' }}" name="razotajs" type="text" id="razotajs" value="{{ $vehicle->razotajs }}">
                @if ($errors->has('razotajs'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('razotajs') }}</strong></span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('depo_nr') ? 'has-error' : ''}}">
                <label for="depo_nr" class="control-label text-md-left">Depo</label>

                <select name="depo_nr" size="1" class="form-control {{$errors->has('depo_nr') ? ' is-invalid' : '' }}" id="depo_nr">
                    <option value=""></option>
                    @foreach($depots as $depot)
                        <option value="{{ $depot->id }}" @if($depot->id == $vehicle->depo_nr) selected @endif>{{ $depot->id }}</option>
                    @endforeach
                </select>

                @if ($errors->has('depo_nr'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('depo_nr') }}</strong></span>
                @endif
            </div>



            <div class="form-group {{ $errors->has('marsruta_id') ? 'has-error' : ''}}">
                <label for="marsruta_id" class="control-label text-md-left">Maršruts</label>

                <select name="marsruta_id" size="1" class="form-control {{$errors->has('marsruta_id') ? ' is-invalid' : '' }}" id="marsruta_id">
                    <option value=""></option>
                    @foreach($routes as $route)
                        <option value="{{ $route->id }}" @if($route->id == $vehicle->marsruta_id) selected @endif>{{ $route->nosaukums }}</option>
                    @endforeach
                </select>

                @if ($errors->has('marsruta_id'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('marsruta_id') }}</strong></span>
                @endif
            </div>
        </div>

        <input type="submit" value="Veikt izmaiņas" class="btn">

    </form>

@endsection

